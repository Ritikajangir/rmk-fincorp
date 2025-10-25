<!-- STEP 1 -->
<div class="step1">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ isset($testimonial) && $testimonial ? $testimonial['name'] : ''}}">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Position / Title</label>
				<input type="text" class="form-control" name="position" id="position" placeholder="Enter Position" value="{{ isset($testimonial) && $testimonial ? $testimonial['position'] : ''}}">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Message</label>
                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write the testimonial here..." required>{{ isset($testimonial) && $testimonial ? $testimonial['message'] : ''}}</textarea>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
				@if(!empty($testimonial->photo))
					<img src="{{ asset('storage/'.$testimonial->photo) }}" id="existingphoto" alt="photo" width="100" class="mt-2">
				@endif
			</div>
		</div>
        <div class="col-12 col-lg-2 check-list default-check step_form_checkbox">
            <div class="flex">
                <span><div class="step-form-checkbox-title">Status</div></span>
            </div>
            
            <div class="detail-fields select-box-wrap side-wrapper switches-grid">
                <div class="switches-container kyc-new-toggle-container">
                    <input type="radio" id="status_active" name="status" value="1" class="status" {{ (!isset($testimonial) || (isset($testimonial) && $testimonial->status == 1)) ? 'checked' : '' }}/>
                    <input type="radio" id="status_inactive" name="status" value="0" class="status" {{ isset($testimonial) && $testimonial->status == 0 ? 'checked' : '' }}/>
                    <label for="status_active">Active</label>
                    <label for="status_inactive">Inactive</label>
                    <div class="switch-wrapper">
                        <div class="switch">
                        <div>Active</div>
                        <div>Inactive</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<div class="configuration_btns">
	<div class="back-btn">
		<a href="{{route('admin.testimonials.index')}}" class="outline-btn stepback-btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
		<path d="M6.70998 9.88047L2.82998 6.00047L6.70998 2.12047C7.09998 1.73047 7.09998 1.10047 6.70998 0.710469C6.31998 0.320469 5.68998 0.320469 5.29998 0.710469L0.70998 5.30047C0.31998 5.69047 0.31998 6.32047 0.70998 6.71047L5.29998 11.3005C5.68998 11.6905 6.31998 11.6905 6.70998 11.3005C7.08998 10.9105 7.09998 10.2705 6.70998 9.88047Z" fill="#bfc0c0"></path>
		</svg>Back / Cancel</a>
	</div>
	<div class="save_btn">
		<button type="submit" class="nbtn" id="saveTestimonialBtn">{{ isset($testimonial) ? 'Update' : 'Save' }}</button>
	</div>
</div>
