@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'About IBDL','breadcrumb'=> 'Who We Are/About
IBDL','header'=>$header,'icon'=>$icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div>
                    <p style="font-size: 1em;text-align:justify" class="about-content">
                        IBDL Learning Group, the driving force behind extraordinary success, motivates professionals to
                        embark on a transformative journey of continuous learning. International business education has
                        been completely transformed by IBDL Learning Group, the unwavering owner of the IBDL brand
                        certificates worldwide. IBDL Learning Group encourages people to achieve extraordinary levels
                        with its cutting-edge learning solutions and firm dedication to quality.
                        <br><br>
                        <b> Certification Authority and Collaboration: </b> <br>
                        In order to provide distinguished learning solutions that motivate professionals to strive for
                        excellence, IBDL Learning Group develops strong partnerships with major names in the industry
                        like McGraw-Hill and the International Leadership Training Centre (ILTC), Missouri State
                        University. IBDL Learning Group makes sure that its learning solutions meet industry standards
                        and encourage learners to go beyond what is expected of them and realize their full potential by
                        utilizing the combined experience of these distinguished partners.
                        <br><br>
                        <b> Growth and Transformation: </b> <br>
                        From humble beginnings in 2006, IBDL Learning Group has undergone a remarkable evolution,
                        expanding its offerings to encompass an extensive portfolio of twenty-two dynamic learning
                        solutions that cater to the diverse needs of ambitious professionals. The continual drive for
                        improvement reflects IBDL Learning Group's dedication to innovation, enabling learners to accept
                        new challenges and undergo change.
                        <br><br>
                        <b> Igniting the Flame of Passionate Learning: </b> <br>

                        The mission of IBDL Learning Group is to inspire individuals and organizations to go beyond
                        their perceived boundaries, grow rapidly and create a passion for continuous learning. IBDL
                        Learning Group inspires learners with endless curiosity and an insatiable desire for knowledge
                        through its innovative learning solutions. Using IBDL Learning Solutions as their mentor,
                        professionals go on a journey of self-discovery and progress, motivated to study and realize
                        their most ambitious objectives.
                        <br><br>

                        <b> Inspire to Learn: A Motto That Drives Success: </b> <br>
                        "Inspire to Learn" is more than a slogan at IBDL Learning Group, it is a guiding principle that
                        penetrates every aspect of our educational philosophy. We believe that inspiration pushes
                        professionals to exceed expectations and achieve excellence. Through our transformative learning
                        solutions, we motivate learners to recognize the pleasure of ongoing learning and equip them to
                        confidently navigate the complexities of the global business landscape.
                        <br><br>



                        <b> Ignite Your Ambition, Inspire to Learn: </b> <br>
                        IBDL Learning Group encourages you to follow your aspirations and realize your complete
                        potential. With our dynamic learning solutions as your guide, you can begin on a journey of
                        constant learning and development. Discover your inner strength as you embrace our cutting-edge
                        learning solutions and join a community of courageous professionals who seek excellence without
                        fear. IBDL Learning Group acts as the turning point that inspires you to learn and advance your
                        achievement.

                    </p>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection