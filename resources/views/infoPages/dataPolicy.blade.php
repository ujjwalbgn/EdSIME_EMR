@extends('frontendLayout.main')
@section('pageTitle', 'Data Policy | EdSime')
@section('menu')
    @include('frontendLayout.menu')
@endsection
@section('content')

<!--begin section-grey -->
<section class="section-grey">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12">
                <h2 class="section-title">Data Policy</h2>
                <article class="media">
                    <div class="media-content">

                        <div class="content is-medium">
                            <p>
                                <strong>Students Personal Data</strong><br>
                                <ul>
                                CodeVelo LLC does not require students to provide personal data for the use of EdSime.

                            </ul>
                            <p>
                                <strong>Instructors Personal Data</strong><br>
                            <ul>
                            CodeVelo LLC need Instructors and Staffs information such as Name, Organization, Email,
                            Phone Number, etc in order to provide necessary services.

                            </ul>
                            <p>
                                <strong>Non Personal Data</strong><br>
                            <ul>
                                CodeVelo LLC will collect technical data such as but not limited to IP address, session, device information required
                                to provide its service. Codevelo reserves the right to collect non-person-specific data obtained from the processing of
                                CodeVelo products (ie. EdSime) and to utilize these data for research, statistical purposes amd more.
                                CodeVelo may also disclose such data to third parties with or without reimbursement or notification.
                            </ul>

                        </div>
                    </div>
                </article>
            </div>
            <!--end col-md-12 -->
        </div>
        <!--end row -->
    </div>
    <!--end container -->
</section>
<!--end section -->
@endsection
