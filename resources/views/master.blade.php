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
        'headerText'=>'E-commerce'
    ])

    @includeIf('partials.address',[
        'karim'=>'Firozshah Colony,Akbarshah, Chittagong.'
    ])



  <!-- Masthead -->
  @yield('content')



  <!-- Icons Grid -->

  <!-- Image Showcases -->


  <!-- Testimonials -->


  <!-- Call to Action -->





@include('partials.testimonials')
  <!-- Footer -->
  @includeFirst(['partials.admin'],[
    'firoz'=>'Blog: https://firozlearninghome.blogspot.com'
])


@include('partials.footer-col')


@includewHEN(true,'partials.footer',[
    'footerText'=>' Allrights Reserved By Md.Abdul Karim(Assistent teacher:1995-2023)'
])

  <!-- Bootstrap core JavaScript -->
@include('partials.scripts')

</body>

</html>
