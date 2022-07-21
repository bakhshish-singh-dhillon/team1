import $ from 'jquery';
import FileUploadWithPreview from "file-upload-with-preview";
import 'file-upload-with-preview/dist/file-upload-with-preview.min.css';;

$(document).ready(function ($) {
    $("body").on("click", ".add-more", function () {
        // var html = $(".after-add-more").first().clone();
        // //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
        // $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
        var html = `
        <div class="form-outline mb-4">
            <label class="form-label" for="key[]">Attribute Name: <span class="text-danger">*</span></label>
            <input name="key[]" type="text" id="key" class="form-control" value="" />
            <label class="form-label" for="value[][]">Value: <span class="text-danger">*</span></label>
            <input name="value[]" type="text" id="value[]" class="form-control" value="" />
            <a class="btn btn-danger remove-attribute">Remove</a>
        </div>        
        `;

        $("body .additional-fields").last().after(html);



    });

    $("body").on("click", ".remove-attribute", function () {
        $(this).parents(".form-outline").remove();
    });

    $('.js-example-basic-single').select2();
    const upload = new FileUploadWithPreview("image_upload");
});