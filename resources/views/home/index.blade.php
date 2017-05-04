@extends('layouts.frontend.master')

@section('content')

    <div class="home-banner-wrapper">
        <div class="container">
            <h1>
                <span class="font-bold">Broker Price Opinion</span><br>
                Virtual Assistant
            </h1>
            <p>
                <i>You're here because you imagine a world where you have more control of your time and you can focus on the most critical
                components of growing your business. We're here to help manifest your new reality.</i>
            </p>

            <button class="btn-lead btn-lead-secondary">Need Help?</button>
            <a class="btn-lead btn-lead-primary" href="/register">Sign Up</a>
        </div>
    </div>
    <div class="about_us_section">
        <div class="container">
            <div class="blue-line"></div>
            <h1 class="text-center" style="padding-bottom: 30px;">About BPOVAS</h1>
            <img class="pull-right" src="/css/images/img2.jpg" style="margin-left: 30px;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, ex et tempus bibendum, ante augue feugiat eros,
            et fringilla urna arcu quis lacus. Pellentesque pellentesque elementum sapien, sed tempus mi pharetra a. Sed id pharetra lorem.
            Pellentesque rutrum pharetra neque. Aliquam erat volutpat. Nulla facilisi. Donec et viverra eros, sit amet varius ligula.
            Nulla facilisi. Sed sollicitudin consequat augue, a consequat magna feugiat quis.</p>

            <p>Ut sed elit vel tellus bibendum dignissim. Praesent non luctus diam. Proin mi lorem, vestibulum vel dolor at, tristique tempor libero.
            Curabitur porta, sapien eget placerat congue, felis erat ultricies erat, sed elementum metus odio sed neque. Nullam finibus purus
            sed dui gravida, ut suscipit quam consequat. Nunc vitae enim sem. Sed eu erat eu mi pellentesque egestas. Donec sit
            amet metus vel enim consectetur fermentum nec ut quam. Ut finibus felis et quam porttitor feugiat. Duis faucibus laoreet enim,
            at tincidunt ex pellentesque a. Nullam aliquam tellus eget felis feugiat congue. Sed purus orci, lacinia et ultrices et, tristique ut neque.
            Sed vel lorem sit amet massa viverra mollis. Sed ac lobortis nisl.</p>

            <p>Donec cursus lectus at neque blandit, et tristique mauris pretium. Ut lobortis a tortor et aliquet. Mauris ut bibendum odio.
            Sed quis enim nibh. Vivamus vitae neque mattis, molestie neque eu, pulvinar est. Vestibulum ac ornare mi. Aenean convallis
            enim ac massa laoreet pellentesque ac eu mauris. In quis efficitur ligula, ultricies rhoncus lacus. Sed mattis mi a nulla
            tincidunt tincidunt. Morbi bibendum velit vel tortor finibus vestibulum. Praesent placerat condimentum sapien eu suscipit.
            Vivamus eleifend interdum tortor tincidunt luctus. Morbi ligula nunc, sodales at tincidunt id, ornare in felis.</p>
            <div class="clearfix"></div>
            <button class="btn-lead btn-lead-blue pull-right">Read More</button>
        </div>

    </div>
    <div class="contact-section">
        <div class="container">
            <div class="blue-line"></div>
            <h1 class="text-center" style="padding-bottom: 30px;">Contact Us</h1>
            <div class="col-sm-6">
                <ul class="unstyled">
                    <li>
                        <i class="fa fa-envelope-o"></i> <span>bpovas@gmail.com</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i> <span>(813)-445-3015</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker"></i> <span>9654 W Linebaugh Ave #148<br>
                        Tampa, FL 33626</span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send Email</button>
                </form>
            </div>
        </div>
    </div>

@endsection