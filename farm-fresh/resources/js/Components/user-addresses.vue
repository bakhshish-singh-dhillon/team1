<template>
  <form action="/contact" method="post" id="contactForm" name="contactForm">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <h2>Billing Address</h2>

        <div class="row">
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Address</label>
            <input
              type="text"
              class="form-control"
              name="billing_address"
              id="billing_address"
              placeholder=""
            />
            @error('billing_address')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Country</label>
            <input
              type="text"
              class="form-control"
              name="billing_country"
              id="billing_country"
              placeholder="Your Country"
            />
            @error('billing_country')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Province</label>
            <input
              type="text"
              class="form-control"
              name="billing_province"
              id="billing_province"
              placeholder="Your Province"
            />
            @error('billing_province')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Postal Code</label>
            <input
              type="text"
              class="form-control"
              name="billing_postal_code"
              id="billing_postal_code"
              placeholder="Your Postal Code"
            />
            @error('billing_postal_code')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Phone</label>
            <input
              type="text"
              class="form-control"
              name="billing_phone"
              id="billing_phone"
              placeholder="Your phone"
            />
            @error('billing_phone')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Shipping Address</h2>
        <div class="row">
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Address</label>
            <input
              type="text"
              class="form-control"
              name="shipping_address"
              id="shipping_address"
              placeholder=""
            />
            @error('shipping_address')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Country</label>
            <input
              type="text"
              class="form-control"
              name="shipping_country"
              id="shipping_country"
              placeholder="Your Country"
            />
            @error('shipping_country')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Province</label>
            <input
              type="text"
              class="form-control"
              name="shipping_province"
              id="shipping_province"
              placeholder="Your Province"
            />
            @error('shipping_province')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Postal Code</label>
            <input
              type="text"
              class="form-control"
              name="shipping_postal_code"
              id="shipping_postal_code"
              placeholder="Your Postal Code"
            />
            @error('shipping_postal_code')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-12 form-group mb-3">
            <label for="" class="col-form-label">Phone</label>
            <input
              type="text"
              class="form-control"
              name="shipping_phone"
              id="shipping_phone"
              placeholder="Your phone"
            />
            @error('shipping_phone')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <input
              type="submit"
              value="Send Message"
              class="btn bg-green text-white rounded-0 py-2 px-4"
            />
            <span class="submitting"></span>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
export default {
  setup: () => ({
    title: "Vue Component initialised",
  }),
};
</script>