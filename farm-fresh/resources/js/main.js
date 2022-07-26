import $ from 'jquery';

$(document).ready(function($) {
    $("body").on("click", ".add-more", function() {
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

    $("body").on("click", ".remove-attribute", function() {
        $(this).parents(".form-outline").remove();
    });

    $('.js-example-basic-single').select2();

    var incrementPlus;
    var decrementMinus;

    var buttonPlus = $("#plus");
    var buttonMinus = $("#minus");

    var incrementPlus = buttonPlus.click(function() {
        // alert("hello");
        var $n = $(".qty");
        $n.val(Number($n.val()) + 1);
    });

    var decrementMinus = buttonMinus.click(function() {
        var $n = $(".qty");
        var amount = Number($n.val());
        if (amount > 1) {
            $n.val(amount - 1);
        }
    });
    // Pravindra Category Modal
    const categoryModal = document.getElementById('categoryModal')
    categoryModal.addEventListener('show.bs.modal', event => {
            $('.js-example-basic-single').select2();
            const button = event.relatedTarget
            const recipient = button.getAttribute('data-bs-whatever')
            const name = button.getAttribute('data-bs-name')
            const parentId = button.getAttribute('data-bs-parent')
            const modalTitle = categoryModal.querySelector('.modal-title')
            const modalBodyInput = categoryModal.querySelector('.modal-body input')

            modalTitle.textContent = `${recipient} Category`

        })
        // Pravindra Category Modal
});