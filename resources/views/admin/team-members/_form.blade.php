<!-- STEP 1 -->
<div class="step1">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ isset($teamMember) && $teamMember ? $teamMember['name'] : ''}}">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Designation</label>
				<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" value="{{ isset($teamMember) && $teamMember ? $teamMember['designation'] : ''}}">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ isset($teamMember) && $teamMember ? $teamMember['email'] : ''}}">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" value="{{ isset($teamMember) && $teamMember ? $teamMember['phone'] : ''}}" oninput="this.value = this.value.replace(/(?!^)\+/g, '').replace(/[^0-9+]/g, '');">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Bio</label>
                <textarea name="bio" id="bio" class="form-control" rows="5" placeholder="Write the bio here...">{{ isset($teamMember) && $teamMember ? $teamMember['bio'] : ''}}</textarea>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Photo</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
				@if(!empty($teamMember->image))
					<img src="{{ asset('storage/'.$teamMember->image) }}" id="existingImage" alt="Image" width="100" class="mt-2">
				@endif
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Facebook Link</label>
				<input type="text" class="form-control" name="facebook" value="{{ isset($teamMember) && $teamMember ? $teamMember['facebook'] : '' }}" placeholder="Enter Facebook URL">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Twitter Link</label>
				<input type="text" class="form-control" name="twitter" value="{{ isset($teamMember) && $teamMember ? $teamMember['twitter'] :'' }}" placeholder="Enter Twitter URL">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>LinkedIn Link</label>
				<input type="text" class="form-control" name="linkedin" value="{{ isset($teamMember) && $teamMember ? $teamMember['linkedin'] : '' }}" placeholder="Enter LinkedIn URL">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="form-group">
				<label>Instagram Link</label>
				<input type="text" class="form-control" name="instagram" value="{{ isset($teamMember) && $teamMember ? $teamMember['instagram'] : '' }}" placeholder="Enter Instagram URL">
			</div>
		</div>
        <div class="col-12 col-lg-2 check-list default-check step_form_checkbox">
            <div class="flex">
                <span><div class="step-form-checkbox-title">Status</div></span>
            </div>
            
            <div class="detail-fields select-box-wrap side-wrapper switches-grid">
                <div class="switches-container kyc-new-toggle-container">
                    <input type="radio" id="status_active" name="status" value="1" class="status" {{ (!isset($teamMember) || (isset($teamMember) && $teamMember->status == 1)) ? 'checked' : '' }}/>
                    <input type="radio" id="status_inactive" name="status" value="0" class="status" {{ isset($teamMember) && $teamMember->status == 0 ? 'checked' : '' }}/>
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
		<a href="{{route('admin.team-members.index')}}" class="outline-btn stepback-btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
		<path d="M6.70998 9.88047L2.82998 6.00047L6.70998 2.12047C7.09998 1.73047 7.09998 1.10047 6.70998 0.710469C6.31998 0.320469 5.68998 0.320469 5.29998 0.710469L0.70998 5.30047C0.31998 5.69047 0.31998 6.32047 0.70998 6.71047L5.29998 11.3005C5.68998 11.6905 6.31998 11.6905 6.70998 11.3005C7.08998 10.9105 7.09998 10.2705 6.70998 9.88047Z" fill="#bfc0c0"></path>
		</svg>Back / Cancel</a>
	</div>
	<div class="save_btn">
		<button type="submit" class="nbtn" id="saveTeamMemberBtn">{{ isset($teamMember) ? 'Update' : 'Save' }}</button>
	</div>
</div>
