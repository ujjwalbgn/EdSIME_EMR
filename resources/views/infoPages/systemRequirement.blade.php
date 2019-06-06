@extends('frontendLayout.main')
@section('pageTitle', 'System Requirement | EdSime')
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
                
                <article class="media">
                    <div class="media-content">
                        <div class="content is-medium">
                            <p>
                                <h5>System Requirements</h5>
                            </p>
                            <ul>
                                <li><b>Browser</b></li>
                                
                                    Your computer or tablet must have Firefox or Google Chrome, and Javascript must be enabled.
                                
                                <li><b>Device Specification</b></li>
                                <ul>
                                    <li>Minimum RAM: 512 MB</li>
                                    <li>Free Disk Space: 150 MB</li>
                                </ul>
                                <li><b>Barcode Scanner</b></li>
                                
                                    You will need a barcode scanner in order to use search patient records and medication barcode. In absence of barcode scanner you will still be able to search patient record using the patient's name.
                                
                                <li>
                                    <b>Internet Bandwidth</b>
                                </li>
                                Bandwidth of 0.5 mbps per device with a minimum of 10 mbps overall to the room.
                            </ul>

                            </p>
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
