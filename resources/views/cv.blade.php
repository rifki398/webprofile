@extends('layout.main')
@section('title','CV')
@section('content')
<section class="bg-light container-fluid d-flex justify-content-center flex-column" id="cv-id"style="width:100%; flex-wrap:wrap;">
    <div class="d-flex justify-content-center" style="padding-top:80px; width:100%;">
        <div class="d-flex p-2 bg-transparent justify-content-center"
            style="width: 300px; height:280px;">
            <img class="rounded img-cv" src="/images/Pasfoto.jpg" alt="">
        </div>
        <div class="bg-white p-3 cv-desc" style="width:calc(96% - 300px); height:280px; margin-left:10px">
            <div class="text-center" style="width: 100%; height:70px;">
                <h1 class="fw-bold font-monospace">Moh Rifqy Risqullah</h1>
            </div>
            <div class="d-flex" style="height: 6px; width:100%">
                <div class="bg-dark" style="width:25%"></div>
                <div class="bg-warning" style="width: 25%"></div>
                <div class="bg-dark" style="width:25%"></div>
                <div class="bg-warning" style="width:25%"></div>
            </div>
            <div class="text-center p-4">
                <p>Hi, I'm Rifqy, student of <b>Physics</b> in Sepuluh Nopember Institute of Technology.
                    I come from Palu, Central Celebes. As a physics student, i spend of my time to be a part
                    of <b>Laboratory Asistant</b>, <b>Teaching Asistant</b>, and another <b>Teaching Jobs</b>.
                    My hobbies are coding and making robotics stuff. I'm familiar with some electronic stuff
                    such: sensors, transduser, IC, module, and microcontroller. I'm also familiar with several
                    programming language such: C/C++, MATLAB, HTML, CSS, Javascript, PHP, and SQL.
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around" style="width:100%; margin-top:20px">
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Work & Internship Experience</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <ul>
                    <li>Laboratory Asistant of Elementary Physics (2020-2022)</li>
                    <li>Teaching Asistant of Elementary Physics (2021-2022)</li>
                    <li>Laboratory Asistant of Instrumentation (2021-2022)</li>
                    <li>Video Solution Maker of Physics at PT. Ardirah Cendikia (2021)</li>
                    <li>Internship as Acoustic Consultant at PT. Alta Integra (2023)</li>
                </ul>
            </div>
        </div>
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Organization, Volunteer, & Committee</h5>
            </div>
            <div class="text-left" style="margin-top: 10px">
                <ul>
                    <li>Member of IAC (ITS Astronomy Club)</li>
                    <li>Member of TKD Orion ITS</li>
                    <li>Member of Purwabaskara Team</li>
                    <li>Electrical Staff at Indo Instrument Tech</li>
                    <li>Website Staff at HIMASIKA ITS</li>
                    <li>Disciplinary Commission in OKKBK 2021</li>
                    <li>Logistic Staff in 8th Physics Summit</li>
                    <li>Member of KKN at Pesanggrahan Village, Batu</li>
                </ul>
            </div>
        </div>
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Competition & Achievement</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <ul>
                    <li>Member of 34th PKM</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around" style="width:100%; margin-top:20px;">
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Workshop Experience</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <ul>
                    <li>OKKBK at Physics Departement (2019)</li>
                    <li>LKMM Pra-TD FSAINS (2019)</li>
                    <li>Basic Public Relation Training (2021)</li>
                    <li>INSIGHT "The Unaware Can't See How It's Showing Up (2021)</li>
                    <li>101 Basic Programming Class (2021)</li>
                    <li>Progate x Warstek 2.0 Coding Bootcamp (2021)</li>
                    <li>Independent Study as Electrical Engineering at PT. Stechoq Robotika (2022)</li>
                </ul>
            </div>
        </div>
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Programming Language</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <ul>
                    <li>HTML (Intermediate)</li>
                    <li>CSS (Intermediate)</li>
                    <li>Javascript (Intermediate)</li>
                    <li>MATLAB (Intermediate)</li>
                    <li>C/C++ (Intermediate for Microcontroller)</li>
                    <li>PHP (Beginner)</li>
                    <li>SQL (Beginner)</li>
                </ul>
            </div>
        </div>
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Framework for Programming</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <ul>
                    <li>Bootstrap (Beginner)</li>
                    <li>jQuery (Beginner)</li>
                    <li>Laravel (Beginner)</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around" style="width:100%; margin-top:20px; margin-bottom:40px;">
        <div class="bg-white d-flex flex-column cv-desc p-2" style="width:32%;">
            <div class="title-cv text-left">
                <h5 class="fw-bold fs-5 font-monospace">Software Experience</h5>
            </div>
            <div class="text-left" style="margin-top:10px;">
                <p>There are several softwares that i have used for my studies or projects.</p>
                <b>Simulation:</b>
                <ul>
                    <li>Proteus</li>
                    <li>Tinkercad</li>
                    <li>Wokwi</li>
                    <li>LogixPro PLC Simulator</li>
                    <li>PSIM Simulator</li>
                    <li>Multism Simulator</li>
                </ul>
                <b>Editing/Design:</b>
                <ul>
                    <li>Filmora</li>
                    <li>Figma</li>
                    <li>Fritzing</li>
                    <li>Eagle</li>
                    <li>KiCad</li>
                </ul>
                <b>Computation/Programming:</b>
                <ul>
                    <li>VSCode</li>
                    <li>MATLAB</li>
                    <li>CodeVision AVR</li>
                    <li>Arduino IDE</li>
                </ul>
            </div>
        </div>
        <div class="bg-white d-flex flex-column mb-auto" style="width: 65.3%">
            <div class="bg-white d-flex flex-column cv-desc p-2 mb-auto" style="width:100%; height:49%;">
                <div class="title-cv text-left">
                    <h5 class="fw-bold fs-5 font-monospace">Projects</h5>
                </div>
                <div class="text-left" style="margin-top:10px;">
                    <p>There are several mini-project that i have completed:</p>
                    <ul>
                        <li>Shaking Table With Bluetooth Control <i>(for exhibiton)</i></li>
                        <li>Gas and Temperature Monitoring System <i>(for subject exam)</i></li>
                        <li>Digital Scales For Withering Leaves <i>(friend's project)</i></li>
                        <li>Filling Bottle Simulation With PLC Control <i>(for subject exam)</i></li>
                        <li>Line Tracking Car <i>(individual project)</i></li>
                        <li>Design UI for Himasika's Website <i>(for organization jobdesk)</i></li>
                        <li>Web development Himasika's Website <i>(for organization jobdesk)</i></li>
                    </ul>
                </div>
            </div>
            <div class="bg-white d-flex flex-column cv-desc p-2" style="width:100%; height:49%; margin-top:20px;">
                <div class="title-cv text-left">
                    <h5 class="fw-bold fs-5 font-monospace">Contacts</h5>
                </div>
                <div class="d-flex justify-content-around text-center" style="margin-top:10px;">
                    <div style="width:25%">
                        <img src="/images/linkedin.png" style="width:30%;">
                        <br>
                        <p>Rifqy Risqullah</->
                    </div>
                    <div style="width:25%">
                        <img src="/images/ig.png" style="width:30%;">
                        <br>
                        <p>@rifqy.nxf</p>
                    </div>
                    <div style="width:25%">
                        <img src="/images/gmail.png" style="width:30%;">
                        <br>
                        <p>rifkineufarion@gmail.com</p>
                    </div>
                    <div style="width:25%" >
                        <img src="/images/wa.png" style="width:30%;">
                        <br>
                        <p>+628 23 2121 3637</p>
                    </div>
                </div>
            </div>
            <div class="bg-warning d-flex flex-column cv-desc p-2" style="margin-top: 20px">
                <div class="text-left">
                    <h5 class="fw-bold fs-5 font-monospace">Download my CV as PDF below:</h5>
                </div>
                <div class="text-center" id="download-cv" style="margin-top:10px; margin-bottom: 25px">
                    <a href="https://drive.google.com/drive/u/0/folders/1TWpoktkYZa4xE2jb1ztlQ0N3DfTeFlRf"
                    style="padding: 12px 24px" target="_blank">
                        <b>DOWNLOAD </b><span class="fas fa-download fs-4 ml-4"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
