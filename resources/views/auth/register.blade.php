@extends('admin.layouts.guest')

@section('content')
<div class="container" style="height: 80vh">
    <div class="d-flex shadow" style="height: 100%;">
        <div style="height: 100%; width:50% !important;">
            <img src="{{ asset('images/register.jpg') }}" style="width:100%; height:100% "
                alt="register">
        </div>
        <div class="bg-white  border-0 border-light p-4 p-lg-5" style="width:50% !important;">
            <div class="text-center text-md-center mb-4 mt-md-0">
                <h1 class="mt-n3 mb-0 h3">{{ __('Create Account') }}</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Form -->
                <div class="form-group mt-4 mb-4">
                    <label for="name">{{ __('Your Name') }}</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-user-alt fa-fw"></i>
                        </span>
                        <input name="name" id="name" type="name" class="form-control"
                            placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus>
                    </div>

                    @error('name') <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- End of Form -->

                <!-- Form -->
                <div class="form-group mt-4 mb-4">
                    <label for="email">{{ __('Your Email') }}</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                </path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                </path>
                            </svg>
                        </span>
                        <input name="email" id="email" type="text" class="form-control"
                            placeholder="{{ __('Email') }}" value="{{ old('email') }}" autofocus>
                    </div>
                    @error('email') <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>


                <div class="form-group mb-4">
                    <label for="">Choose your college</label>
                    <select class="form-select" id="college" name="college_id" required>
                        <option selected>Choose College</option>
                        @foreach (\App\Models\College::pluck('name', 'id'); as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="dept">Choose your department</label>
                    <select class="form-select department" name="dept_id" id="dept">
                        <option selected>Choose Department</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="password">{{ __('Your Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">
                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </span>
                        <input name="password" type="password" placeholder="{{ __('Password') }}"
                            class="form-control" id="password" value="password"
                            autocomplete="new-password">
                    </div>
                    @error('password') <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">
                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </span>
                        <input name="password_confirmation" type="password"
                            placeholder="{{ __('Confirm Password') }}" value="password"
                            class="form-control" id="password_confirmation">
                    </div>
                </div>
                <!-- End of Form -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-gray-800">{{ __('Register') }}</button>
                </div>
            </form>

            <div class="d-flex justify-content-center align-items-center mt-4">
                <span class="fw-normal">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="fw-bold">{{ __('Login here') }}</a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
            $(document).on("click", ".btn_add", function() {
                let inputCount = $(".team_members").find("input").length;
                let numberIncr =
                    inputCount > 0 ?
                    parseInt(
                        $(".team_members")
                        .find("input:last")
                        .attr("id")
                    ) + 1 :
                    0;

                $(".team_members")
                    .append(
                        $(`
                    <div class="d-flex mt-3">
                                <input class="form-control" id="${numberIncr}" type="text" name="teams[]"
                                    placeholder="Enter team member name" required>
                                <button type="button" class="btn btn-danger ms-3 btn-sm delegated-btn"><svg
                                    class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                         </button>
                    </div>
                    `)
                    );
            });

            $(document).on("click", ".delegated-btn", function(e) {
                e.preventDefault();
                $(this)
                    .parent()
                    .remove();
            });





            $("#college").on('change', function() {
                let collegeId = $(this).val();
                // Ajax
                $.ajax({
                    url: `{{ route('getDepartment') }}`,
                    dataType: 'json',
                    data: {
                        collegeId
                    },
                    beforeSend: function() {
                        $(".department").html('<option>--- Loading ---</option>');
                    },
                    success: function(res) {
                        console.log(res);
                        let _html = '';
                        $.each(res, function(id, data) {

                            _html += `<option  value="${id}">${data}</option>`;
                        });
                        $(".department").html(_html);

                    }
                });
            });
        });
</script>
@endpush