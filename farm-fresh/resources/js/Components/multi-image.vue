<template>
  <div class="custom-file-container" data-upload-id="image_upload">
    <label
      >Upload File
      <a
        href="javascript:void(0)"
        class="custom-file-container__image-clear"
        title="Clear Image"
        >clear</a
      ></label
    >
    <label class="custom-file-container__custom-file">
      <input
        type="file"
        class="custom-file-container__custom-file__custom-file-input"
        accept="image/*"
        multiple
        aria-label="Choose File"
        name="image_upload[]"
        id="custom_image_uploader"
      />
      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
      <span
        class="custom-file-container__custom-file__custom-file-control"
      ></span>
    </label>
    <div class="custom-file-container__image-preview mb-0"></div>
  </div>
</template>
<script>
import FileUploadWithPreview from "file-upload-with-preview";
import "file-upload-with-preview/dist/file-upload-with-preview.min.css";
import $ from "jquery";
export default {
  name: "MultiImage",
  props: {
    images: {
      default: null,
      type: String,
    },
    images_path: {
      default: null,
      type: String,
    },
  },
  data() {
    return {
      upload: null,
    };
  },
  methods: {
    check() {
      console.log(this.upload.cachedFileArray);
    },
  },
  mounted() {
    var vue = this;
    if (this.images) {
      var images = JSON.parse(this.images);
      images.forEach((item, index, arr) => {
        arr[index] = this.images_path + arr[index];
      });
    }
    this.upload = new FileUploadWithPreview("image_upload", {
      showDeleteButtonOnImages: false,
      presetFiles: images,
    });
    $("#custom_image_uploader").click(function () {
      vue.upload.clearPreviewPanel();
      console.log("clicked");
    });
  },
};
</script>