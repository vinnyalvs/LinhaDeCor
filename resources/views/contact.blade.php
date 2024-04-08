<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
    @yield('head')
</head>
<body>
@include('layout.partials.menu')
<div class="contact-main">
    <div class="contact-logo-Header">
        <div class="logo-img" id="logo-img"></div>
        <div class="header-img"> </div>
    </div>
    <div class="post-contact-content">
        <div class="contact-container contact-heading">
            <h2 >{{__('about/contact.contact')}}</h2>
        </div>
        <div class="contact-container">
            <h3>{{__('about/contact.press_label')}}</h3>
            <h3>{{__('about/contact.email')}}</h3>
            <h4>{{__('about/contact.social_network_1')}}</h4>
            <h4>{{__('about/contact.social_network_2')}}</h4>
        </div>
        <div class="contact-container">
            <h3>{{__('about/contact.prod_education_label')}}</h3>
            <h4>{{__('about/contact.ngongo_heading')}}</h4>
            <h4>{{__('about/contact.ngongo_email')}}</h4>
            <h4>{{__('about/contact.mariana_label')}}</h4>
            <h4>{{__('about/contact.mariana_number')}}</h4>
        </div>
    </div>
    <div class="blog-content">
            <div class="blog-posts-wrapper">
                @foreach($posts as $post)
                    @component('blog.partials.card',['post' => $post])
                    @endcomponent
                @endforeach
            </div>
    </div>
</div>
</body>
</html>
