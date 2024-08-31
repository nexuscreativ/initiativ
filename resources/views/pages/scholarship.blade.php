@extends('layouts.blank')

@section('title', 'Scholarship')

@section('content')
<div id="contact-modal" class="">
    <div class="lqd-modal-inner">
        <div class="lqd-modal-head"></div>
        <section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat"
            style="background-image: url(./assets/images/common/modal-bg.jpeg);">
            <div class="container p-0">
                <div class="row m-0 min-h-100vh items-center">
                    <div class="col col-12 col-md-6 pr-100 module-content">
                        <div class="ld-fancy-heading">
                            <h2 class="ld-fh-element mb-0/75em text-55 leading-0/8em font-medium text-black">Apply for
                                <span>scholarship.</span>
                            </h2>
                        </div>

                        <div class="ld-fancy-heading">
                            <p class="text-18 ld-fh-element">Our scholarship program is designed to support and empower students who demonstrate academic excellence, leadership potential, and a commitment to making a positive impact in their communities. We believe that by investing in the next generation of innovators and leaders, we are helping to shape a brighter future for Nigeria.</p>
                        </div>
                        <div class="spacer w-full sm:hidden">
                            <div class="w-full h-140"></div>
                        </div>
                        <div class="container-fluid px-0 text-black">
                            <div class="row m-0">
                                <div class="col col-md-6 p-0">
                                    <div class="ld-fancy-heading relative mb-10">
                                        <h6 class="ld-fh-element mb-0/5em inline-block relative text-black">careers
                                        </h6>
                                    </div>
                                    <div class="mb-10 ld-fancy-heading relative">
                                        <p
                                            class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/2em font-medium text-text">
                                            Would you like to join our growing team?</p>
                                    </div>
                                    <div class="ld-fancy-heading relative mb-10">
                                        <p class="ld-fh-element mb-0/5em inline-block relative">
                                            <a href="#"
                                                class="text-16 font-bold leading-1/2em text-black">careers@1019initiative.ng
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-6 p-0">
                                    <div class="ld-fancy-heading relative mb-10">
                                        <h6
                                            class="ld-fh-element mb-0/5em inline-block relative text-14 font-bold tracking-0 text-black">
                                            Feedbacks</h6>
                                    </div>
                                    <div class="mb-10 ld-fancy-heading relative mb-10">
                                        <p
                                            class="ld-fh-element mb-0/5em inline-block relative text-16 leading-1/2em font-medium text-text">
                                            Grassroot Support For President Tinibu 2024.</p>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element mb-0/5em inline-block relative">
                                            <a href="#"
                                                class="text-16 font-bold leading-1/2em text-black">info@1019initiative.ng</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-5 offset-md-1">
                        <div
                            class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block">
                            <div role="form">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form method="post" class="lqd-cf-form"
                                    novalidate="novalidate" data-status="init">
                                    @csrf
                                    <p>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="name" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Fullname">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="phone" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Phone Number">
                                        </span>


                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="email" name="email" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Your email address">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="nin" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="National ID">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="institute" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Name of Institute">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="matric_no" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Matriculation Number">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="course" name="course" size="40" aria-required="true"
                                                aria-invalid="false" require placeholder="Course Of Study">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="cgpa" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="GPA">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <input
                                                class="border-black-20 text-black text-14 font-normal bg-transparent"
                                                type="text" name="level" size="40" aria-required="true"
                                                aria-invalid="false" required placeholder="Current Level">
                                        </span>
                                        <span class="lqd-form-control-wrap">
                                            <span class="lqd-cf-acceptance">
                                                <span>
                                                    <label>
                                                        <input type="checkbox" name="acceptance" value="1"
                                                            aria-invalid="false" required>
                                                        <span class="lqd-cf-list-item-label">I am bound by the terms
                                                            of the Service I accept Privacy Policy</span>
                                                    </label>
                                                </span>
                                            </span>
                                        </span>
                                        <input type="submit" value="Process New Application"
                                            class="has-spinner lqd-cf-submit border-none text-16 font-bold uppercase tracking-0/5 text-white bg-primary hover:bg-primary">
                                    </p>
                                </form>
                                <div class="lqd-cf-response-output"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="lqd-modal-foot"></div>
    </div>
</div>
@endsection