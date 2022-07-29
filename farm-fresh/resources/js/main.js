import $ from 'jquery';

$(document).ready(function ($) {
    $("body").on("click", ".add-more", function () {
        var html = `<div class="row py-3 form-outline">
                        <div class="col-md-5">
                        <label class="form-label" for="key[]">Attribute Name: <span class="text-danger">*</span></label>
                        <input name="key[]" type="text" id="key" class="form-control" value="" />
                        </div>
                        <div class="col-md-5">
                        <label class="form-label" for="value[][]">Value: <span class="text-danger">*</span></label>
                        <input name="value[]" type="text" id="value[]" class="form-control" value="" />
                        </div>
                        <div class="col-md-2">
                        <br>
                        <a class="btn btn-danger remove-attribute"><i class="fa-solid fa-minus"></i></a></div>
                    </div>`;

        $("body .additional-fields").append(html);

    });

    $("body").on("click", ".remove-attribute", function () {
        $(this).parents(".form-outline").remove();
    });

    $('.js-example-basic-single').select2();

    // Dhara to add products into the cart (counter for products)

    var incrementPlus;
    var decrementMinus;

    var buttonPlus = $("#plus");
    var buttonMinus = $("#minus");

    var incrementPlus = buttonPlus.click(function () {
        // alert("hello");
        var $n = $(".qty");
        $n.val(Number($n.val()) + 1);
    });

    var decrementMinus = buttonMinus.click(function () {
        var $n = $(".qty");
        var amount = Number($n.val());
        if (amount > 1) {
            $n.val(amount - 1);
        }
    });

    // Pravindra Category Modal
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
    // Pravindra Category Modal


    //Dhara : Close alert on click 
    var hide = $(".alertClose").click(function () {
        $(".alert").hide();

    });


    const categoryModal = document.getElementById('categoryModal')

    if (categoryModal) {

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
                put_method.id = '_method';
                put_method.value = 'PUT';
                put_method.name = '_method';
                document.getElementById("category_form").appendChild(put_method);
            } else {
                document.getElementById("submit_btn").innerHTML = "Create";
                document.getElementById("category_form").action = "/admin/categories";
                document.getElementById("_method").remove();
            }
            const name = button.getAttribute('data-bs-name')

            const modalBodyInput = categoryModal.querySelector('.modal-body #category-name')
            modalBodyInput.value = name
            document.getElementById('category_id').getElementsByTagName('option')[parentId].selected = 'selected';
            $('.js-example-basic-single').select2();

            const modalTitle = categoryModal.querySelector('#categoryModalLabel');
            ``
            modalTitle.textContent = `${recipient} Category`


        });
    }
});