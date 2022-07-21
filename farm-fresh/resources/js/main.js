import $ from 'jquery';

$(document).ready(function ($) {
    $("body").on("click", ".add-more", function () {
        var html = `
        <div class="form-outline mb-4">
            <label class="form-label" for="key[]">Attribute Name: <span class="text-danger">*</span></label>
            <input name="key[]" type="text" id="key" class="form-control" value="" />
            <label class="form-label" for="value[][]">Value: <span class="text-danger">*</span></label>
            <input name="value[]" type="text" id="value[]" class="form-control" value="" />
            <a class="btn btn-danger remove-attribute">Remove</a>
        </div>        
        `;

        $("body .additional-fields").append(html);

    });

    $("body").on("click", ".remove-attribute", function () {
        $(this).parents(".form-outline").remove();
    });

    $('.js-example-basic-single').select2();
});