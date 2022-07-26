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
        const button = event.relatedTarget
        var parentId = 0;
        parentId = button.getAttribute('data-bs-parent')
        if (parentId == "" || undefined == parentId || null == parentId) {
            parentId = 0;
        }
        const id = button.getAttribute('data-bs-id')
        const recipient = button.getAttribute('data-bs-whatever')
        if (recipient == "Edit") {
            document.getElementById("category_form").action = "/admin/categories/" + id;
            document.getElementById("submit_btn").innerHTML = "Update";
            var put_method = document.createElement('input');
            put_method.type = 'hidden';
            put_method.value = 'PUT';
            put_method.name = '_method';
            document.getElementById("category_form").appendChild(put_method);
        } else {
            document.getElementById("submit_btn").innerHTML = "Create";
            document.getElementById("category_form").action = "/admin/categories";
        }
        const name = button.getAttribute('data-bs-name')

        const modalBodyInput = categoryModal.querySelector('.modal-body #category-name')
        modalBodyInput.value = name
        document.getElementById('category_id').getElementsByTagName('option')[parentId].selected = 'selected';
        $('.js-example-basic-single').select2();

        const modalTitle = categoryModal.querySelector('#categoryModalLabel');
        ``
        modalTitle.textContent = `${recipient} Category`


    })

    // Pravindra Category Modal
});