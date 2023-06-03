@extends('layouts.aboutus')

@section('container')
    {{-- <h1>Landing page</h1> --}}
      <section class="landing-desc">
        <div class="my-width">
          <div class="content">
            <p class="txt-desc">
                Selamat datang di MovieNerds!

                Kami adalah tim TheFourHorsemen, dan dengan bangga kami mempersembahkan MovieNerds, sebuah platform online yang didedikasikan bagi para penggemar film di seluruh dunia. Kami percaya bahwa film adalah bentuk seni yang kuat dan dapat menginspirasi, menyatukan, dan menghibur orang-orang dari berbagai latar belakang.
                
                Tujuan utama kami adalah memberikan wadah bagi para penggemar film untuk berinteraksi, berdiskusi, dan berbagi informasi tentang film yang mereka cintai. Melalui forum yang kami sediakan, Anda dapat bergabung dengan komunitas penggemar film yang bersemangat dan berbagi pengetahuan serta pendapat Anda. Apakah Anda seorang pecinta film Hollywood blockbuster, penggemar film indie, atau bahkan penggemar film klasik, MovieNerds menyediakan ruang bagi semua orang.
                
                MovieNerds bukanlah proyek yang kami ciptakan sendirian. Tim TheFourHorsemen adalah kelompok individu yang bersemangat tentang perfilman dan telah menggabungkan keahlian kami dalam pengembangan web dan desain untuk menciptakan platform ini. Kami terus berkomitmen untuk meningkatkan dan mengembangkan MovieNerds agar dapat memberikan pengalaman terbaik bagi semua pengguna kami.
                
                Terima kasih telah bergabung dengan MovieNerds, dan kami berharap Anda menikmati menjelajahi dunia film bersama kami. Jika Anda memiliki pertanyaan, saran, atau masukan, jangan ragu untuk menghubungi kami. Kami siap membantu!
                
                Salam,
                Tim TheFourHorsemen
            </p>
          </div>
        </div>
      </section>
      <section id="team" class="team">
        <h2>Our Team</h2>
        <div class="team-member">
          <img
            src="img/aulia.jpg"
            alt="Team Member" />
          <h3>Aulia</h3>
          <p>UI/UX Designer</p>
        </div>
        <div class="team-member">
          <img
            src="img/anna.jpg"
            alt="Team Member" />
          <h3>Anna</h3>
          <p>Back-end Developer</p>
        </div>
        <div class="team-member">
          <img
            src="img/laura.jpg"
            alt="Team Member" />
          <h3>Laura</h3>
          <p>Front-end Developer</p>
        </div>
        <div class="team-member">
          <img
            src="img/andre.jpg"
            alt="Team Member" />
          <h3>Andre</h3>
          <p>Project Manager</p>
        </div>
      </section>
@endsection