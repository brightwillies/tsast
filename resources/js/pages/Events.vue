<template>
  <div>
    <div class="page-content">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div
            class="
              page-title-box
              d-flex
              align-items-center
              justify-content-between
            "
          >
            <h4 class="page-title mb-0 font-size-18">Events</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Events</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div data-repeater-list="group-a">
        <div data-repeater-item="" class="row pull-right">
          <div class="col-lg-9"></div>

          <div class="col-lg-3 align-self-center">
            <button
              class="btn btn-primary btn-block mb-3"
              @click="showNewModal"
            >
              Add New Event
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table
                id="datatable-buttons"
                class="table table-bordered dt-responsive nowrap"
                style="
                  border-collapse: collapse;
                  border-spacing: 0;
                  width: 100%;
                "
              >
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Venue</th>
                    <th>Date</th>
                    <th>Status</th>

                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <tr v-for="singleItem in tableData" :key="singleItem.id">
                    <td>{{ singleItem.title }}</td>
                    <td>{{ singleItem.venue }}</td>
                    <td>{{ singleItem.date }}</td>
                    <td>{{ singleItem.status_name }}</td>
                    <td>
                      <button
                        class="btn"
                        type="button"
                        @click="launchEditModal(singleItem)"
                      >
                        <i class="bx bx-edit-alt"></i>
                      </button>
                    </td>
                    <td>
                      <button
                        class="btn"
                        type="button"
                        @click="showDeleteModal(singleItem)"
                      >
                        <i class="bx bx-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
    </div>

    <div
      id="newRecordModal"
      class="modal fade bs-example-modal-lg"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              v-show="!editmode"
              class="modal-title mt-0"
              id="myLargeModalLabel"
            >
              Add Event's Details
            </h5>
            <h5
              v-show="editmode"
              class="modal-title mt-0"
              id="myLargeModalLabel"
            >
              Update Event's Details
            </h5>
            <button
              @click="modalClose()"
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form @submit.prevent="editmode ? updateRecord() : saveRecord()">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input
                      required
                      v-model="form.title"
                      type="text"
                      id="name"
                      name="group-a[0][untyped-input]"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="name">Venue</label>
                    <input
                      required
                      v-model="form.venue"
                      type="text"
                      id="name"
                      name="group-a[0][untyped-input]"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="name">Date</label>
                    <input
                      required
                      v-model="form.date"
                      type="date"
                      id="name"
                      name="group-a[0][untyped-input]"
                      class="form-control"
                    />
                  </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label class="d-block">Status</label>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="example-radios-inline1"
                          name="example-radios-inline"
                          value="1"
                          v-model="form.status"
                          checked=""
                        />
                        <label
                          id="labelalign"
                          class="form-check-label"
                          for="example-radios-inline1"
                          >Active</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="example-radios-inline2"
                          name="example-radios-inline"
                          value="0"
                          v-model="form.status"
                        />
                        <label
                          id="labelalign"
                          class="form-check-label"
                          for="example-radios-inline2"
                          >Inactive</label
                        >
                      </div>
                    </div>
                  </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="name">Summary</label> <br />
                    <textarea
                      v-model="form.summary"
                      name=""
                      id=""
                      style="width: 100%"
                      cols="10"
                      rows="5"
                    ></textarea>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label
                      for="example-text-input"
                      class="col-md-3 col-form-label form-control-label"
                      >Preview</label
                    >
                    <div class="col-md-12">
                      <img
                        :src="imageAvatar"
                        id="profile-img-tag"
                        height="250px"
                        width="100%"
                      />

                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="customFileLang"
                          lang="en"
                          @change="getFeaturedImage"
                          ref="webfile"
                        />
                        <label class="custom-file-label" for="customFileLang"
                          >Select Image</label
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <button class="btn btn-primary btn-block mb-3" type="submit">
                    <span v-show="!editmode">Add New Event</span>
                    <span v-show="editmode">Update Event's Details</span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div
      id="deleteRecordModal"
      class="modal fade bs-example-modal-sm"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mySmallModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="mySmallModalLabel">
              Deleting a record
            </h5>
            <button
              @click="DeleteModalClose"
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Are you sure you want to remove
              <strong> {{ selectedItem.name }}</strong> ?
            </p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              No
            </button>
            <button type="button" @click="deleteRecord" class="btn btn-primary">
              Yes
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
</template>

  <script>
import axios from "axios";
import Form from "vform";
import { mixin } from "../mixin";

import "vue-select/dist/vue-select.css";

import vSelect from "vue-select";
export default {
  components: {
    vSelect,
  },
  mixins: [mixin],
  data() {
    return {
      selectedItem: "",
      imageAvatar: null,
      required: true,
      editmode: false,
      tableData: [],
      roles: [],
      form: new Form({
        title: "",
        date: "",
        venue: "",
        summary: "",
        featured_image: "",
        mask: "",
        status: "1",
      }),
    };
  },
  mounted() {
    this.getRecords();
    //    alert('Bright');
  },

  methods: {
    modalClose() {
      $("#newRecordModal").modal("hide");
    },
    DeleteModalClose() {
      $("#deleteRecordModal").modal("hide");
    },
    async getFeaturedImage(e) {
      this.form.featured_image = this.$refs.webfile.files[0];
      let image = e.target.files[0];
      let reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (e) => {
        this.imageAvatar = e.target.result;
      };
    },
    initDatatable() {
      setTimeout(() => {
        $("#datatable-buttons").DataTable({
          pagingType: "full_numbers",
          lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 100, "All"],
          ],
          order: [
            [0, "asc"],
            [3, "desc"],
          ],
          responsive: true,
          destroy: true,
          retrieve: true,
          autoFill: true,
          colReorder: true,
        });
      }, 300);
    },

    getRecords() {
      axios
        .get("/api/v1/admin/events")
        .then(({ data }) => {
          this.tableData = data.data;
          this.initDatatable();
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    updateRecord() {
      var vm = this;
      let formData = new FormData();
      formData.append("title", this.form.title);
      formData.append("time", this.form.time);
      formData.append("summary", this.form.summary);
      formData.append("date", this.form.date);
      formData.append("venue", this.form.venue);
      formData.append("featured_image", this.form.featured_image);
      formData.append("status", this.form.status);
      axios
        .post("/api/v1/admin/events/" + this.form.mask, formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then(
          (response) => {
            if (response) {
              const res = response.data;

              if (res.code === 200) {
                this.successToastReloadPage(res.message);
              } else {
              }
            }
          },
          function (error) {
            if (error.response) {
              console.log(error.response.data.errors);
              error.response.data.errors.forEach((element) => {
                vm.$toasted.show(element);
              });
              // alert(error.response.status);
            }
          }
        );
    },
    showNewModal() {
      this.form.reset();
      this.editmode = false;
      this.imageAvatar = null;
      $("#newRecordModal").modal("show");
    },
    showDeleteModal(record) {
      this.selectedItem = record;
      $("#deleteRecordModal").modal("show");
    },

    launchEditModal(record) {
      this.form.reset();
      this.editmode = true;
      this.imageAvatar = record.image;
      this.form.fill(record);
      $("#newRecordModal").modal("show");
    },
    saveRecord() {
      var vm = this;
      let formData = new FormData();
      formData.append("title", this.form.title);
      formData.append("time", this.form.time);
      formData.append("summary", this.form.summary);
      formData.append("date", this.form.date);
      formData.append("venue", this.form.venue);
      formData.append("featured_image", this.form.featured_image);
      formData.append("status", this.form.status);
      axios
        .post("/api/v1/admin/events", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then(
          (response) => {
            if (response) {
              const res = response.data;

              if (res.code === 200) {
                this.successToastReloadPage(res.message);
              } else {
              }
            }
          },
          function (error) {
            if (error.response) {
              console.log(error.response.data.errors);
              error.response.data.errors.forEach((element) => {
                vm.$toasted.show(element);
              });
              // alert(error.response.status);
            }
          }
        );
    },

    deleteRecord() {
      var vm = this;
      let formData = new FormData();

      axios
        .delete(
          "/api/v1/admin/usermanagement/ministries/" + this.selectedItem.mask,
          formData,
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }
        )
        .then(
          (response) => {
            if (response) {
              const res = response.data;

              if (res.code === 200) {
                this.successToastReloadPage(res.message);
              } else {
              }
            }
          },
          function (error) {
            if (error.response) {
              console.log(error.response.data.errors);
              error.response.data.errors.forEach((element) => {
                vm.$toasted.show(element);
              });
              // alert(error.response.status);
            }
          }
        );
    },
  },
};
</script>

  <style lang="scss" scoped>
</style>
