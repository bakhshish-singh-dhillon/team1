import $ from 'jquery';

$(document).ready(function ($) {

    // Admin edit / add product:  adding or removing meta attribute
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

    // Inappropriate variable name reason: (Were trying to provide dark and light mode, but chose to provide reading mode instead)

    // let root = document.documentElement;

    // changing mode for reading and normal mode
    $(".theme-box").on("click", function () {
        $(this).toggleClass('active');
    });

    // getting mode from cookie and setting respected mode
    if (getCookie("mode") == "reading") {
        $("body").addClass('grey-filter');
    }

    // a function to get cookie from the storage
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // storing view mode as a cookie
    $("#green_theme").on("click", function () {
        // root.style.setProperty('--theme-color', '#3f6c39');
        $("body").removeClass('grey-filter');
        document.cookie = "mode=normal";
    });
    $("#red_theme").on("click", function () {
        $("body").addClass('grey-filter');
        document.cookie = "mode=reading";
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

    // slideout flash messages
    $(".alert").fadeOut(4000);

    var hide = $(".close").click(function () {
        $(".alert").hide();

    });


    // $(".alert").slideUp(2500, function () {
    //     $(".alert").hide();
    // });

    // saving category form
    if (document.getElementById('category_form')) {
        document.getElementById('category_form').addEventListener('submit', function (evt) {
            evt.preventDefault();
            if (document.getElementById('category-name').value == "") {
                document.getElementById('required').innerHTML = "Category name is required!";
            } else {
                category_form.submit();
            }
        })
    }
    // Pravindra Category Modal
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
                document.getElementById("categoryModalLabel").innerHTML = "Edit Category";
                var put_method = document.createElement('input');
                put_method.type = 'hidden';
                put_method.id = '_method';
                put_method.value = 'PUT';
                put_method.name = '_method';
                if (!document.getElementById("_method")) {
                    document.getElementById("category_form").appendChild(put_method);
                }
            } else {
                document.getElementById("categoryModalLabel").innerHTML = "Create Category";
                document.getElementById("submit_btn").innerHTML = "Create";
                document.getElementById("category_form").action = "/admin/categories";
                if (document.getElementById("_method")) {
                    document.getElementById("_method").remove();
                }
            }
            const name = button.getAttribute('data-bs-name');

            const modalBodyInput = categoryModal.querySelector('.modal-body #category-name');
            modalBodyInput.value = name;
            if (document.getElementById('category_id')) {
                document.getElementById('category_id').getElementsByTagName('option')[parentId].selected = 'selected';
            }
            $('.js-example-basic-single').select2();

            const modalTitle = categoryModal.querySelector('#categoryModalLabel');
            ``
            modalTitle.textContent = `${recipient} Category`


        });
    }

    // Pravindra Category Modal End
    if ($("#order_publish").get(0)) {
        $("#order_publish").prop('disabled', true);
        $('#order_status').change(
            function () {
                $("#order_publish").prop('disabled', false);
            }
        );
    }

    // Pravindra Order Status Start
    $("#order_publish").on("click", function () {
        $("#order_status_update_form").submit();
    });
    // Pravindra Order Status End

    // Pravindra User Details Start
    if ($("#update_user").get(0)) {
        $('#first_name').keyup(
            function () {
                $("#update_user").show("slow");
            }
        );
        $('#last_name').keyup(
            function () {
                $("#update_user").show("slow");
            }
        );
        $('#is_subscribed').change(
            function () {
                $("#update_user").show("slow");
            }
        );
    }
    // Pravindra User Details End
});