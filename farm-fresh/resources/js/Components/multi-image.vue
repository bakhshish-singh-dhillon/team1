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
      />
      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
      <span
        class="custom-file-container__custom-file__custom-file-control"
      ></span>
    </label>
    <div class="custom-file-container__image-preview"></div>
  </div>
</template>
<script>
import FileUploadWithPreview from "file-upload-with-preview";
import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';;
export default {
  name: 'MultiImage',
  data () {
    return {
      upload: null
    }
  },
  methods: {
    check () {
      // Use the chrome inspector
      console.log(this.upload.cachedFileArray)
    }
  },
  mounted () {
    this.upload = new FileUploadWithPreview('image_upload')
  }
};
</script>