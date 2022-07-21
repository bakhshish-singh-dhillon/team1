import $ from 'jquery';

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
    // const upload = new FileUploadWithPreview("image_upload", {
    //     showDeleteButtonOnImages: true,
    //     text: {
    //         chooseFile: "Custom Placeholder Copy",
    //         browse: "Custom Button Copy",
    //         selectedCount: "Custom Files Selected Copy",
    //     },
    //     images: {
    //         baseImage: importedBaseImage,
    //     },
    //     presetFiles: [
    //         "../public/logo-promosis.png",
    //         "https://images.unsplash.com/photo-1557090495-fc9312e77b28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80",
    //     ],
    // });
});