<!DOCTYPE html>
<html lang="en">

<head>

@include('partials.meta')

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
 @include('partials.styles')

</head>

<body>
    @include('partials.call-to-action')

    <!-- Navigation -->


    @includeWhen(true,'partials.navigation',[
        'headerText'=>''
    ])
    @includeIf('partials.address',[
        'karim'=>'Firozshah Colony, Akbarshah, Chittagong'
    ])




  <!-- Masthead -->
  @yield('content')



  <!-- Icons Grid -->

  <!-- Image Showcases -->


  <!-- Testimonials -->


  <!-- Call to Action -->






  <!-- Footer -->


@include('partials.footer-col')


@includewHEN(true,'partials.footer',[
    'footerText'=>'Allrights Reserved By Md.Abdul Karim(Assistent teacher:1995-2023)'
])
 @includeIf('partials.address',[
        'karim'=>''
    ])
  <!-- Bootstrap core JavaScript -->
@include('partials.scripts')

</body>

</html>
