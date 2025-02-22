@extends('home/layout')
@section('home/content')
<style>
    .page-contacts {
    padding-top: 70px
}

@media (max-width: 767px) {
    .page-contacts {
        padding-top:10px
    }
}

.page-contacts .col-lg-4 {
    display: inline-flex
}

.page-contacts .col-lg-4 .contact-box {
    background: #ffffff;
    padding: 30px 20px 30px 90px;
    border-radius: 5px;
    position: relative;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    -webkit-box-shadow: 0 0 1.25rem rgba(108,118,134,0.1);
    box-shadow: 0 0 1.25rem rgba(108,118,134,0.1);
    width: 100%
}

@media (max-width: 991px) {
    .page-contacts .col-lg-4 .contact-box {
        padding:15px;
        text-align: center
    }
}

@media (max-width: 767px) {
    .page-contacts .col-lg-4 .contact-box {
        margin-bottom:10px;
        padding: 15px 15px 15px 80px;
        text-align: left
    }
}

.page-contacts .col-lg-4 .contact-box .icon {
    position: absolute;
    left: 20px;
    top: 30px;
    
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 46px;
    border: 1px dashed var(--blue-1,#AF4F30);
    border-radius: 50%;
    color: var(--blue-1,#AF4F30);
    -webkit-transition: 0.5s;
    transition: 0.5s
}

@media (max-width: 991px) {
    .page-contacts .col-lg-4 .contact-box .icon {
        position:relative;
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        top: 0;
        margin-bottom: 10px
    }
}

@media (max-width: 767px) {
    .page-contacts .col-lg-4 .contact-box .icon {
        left:15px;
        top: 50%;
        transform: translate(0, -50%);
        margin-bottom: 0;
        position: absolute
    }
}

.page-contacts .col-lg-4 .contact-box .icon svg path,.page-contacts .col-lg-4 .contact-box .icon svg polygon {
    fill: var(--blue-1,#AF4F30) !important
}

@media (max-width: 767px) {
    .page-contacts .col-lg-4 .contact-box .content h4 {
        font-size:16px;
        margin-bottom: 2px
    }
}

.page-contacts .col-lg-4 .contact-box .content p,.page-contacts .col-lg-4 .contact-box .content a {
    margin-bottom: 0;
    color: #777
}

@media (max-width: 767px) {
    .page-contacts .col-lg-4 .contact-box .content p,.page-contacts .col-lg-4 .contact-box .content a {
        font-size:13px
    }
}

.page-contacts .col-lg-4 .contact-box .content p:hover,.page-contacts .col-lg-4 .contact-box .content p:focus,.page-contacts .col-lg-4 .contact-box .content a:hover,.page-contacts .col-lg-4 .contact-box .content a:focus {
    color: var(--blue-1,#AF4F30)
}

.page-contacts .col-lg-4 .contact-box:hover {
    -webkit-box-shadow: 0 0 30px 0 rgba(67,67,67,0.15);
    box-shadow: 0 0 30px 0 rgba(67,67,67,0.15);
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px)
}

.page-contacts .col-lg-4 .contact-box:hover .icon {
    border-color: var(--blue-1,#AF4F30);
    background-color: var(--blue-1,#AF4F30)
}

.page-contacts .col-lg-4 .contact-box:hover .icon svg path,.page-contacts .col-lg-4 .contact-box:hover .icon svg polygon {
    fill: #fff !important
}

.page-contacts .contact-padding {
    padding-top: 50px
}

@media (max-width: 991px) {
    .page-contacts .contact-padding {
        padding-top:40px
    }
}

@media (max-width: 767px) {
    .page-contacts .contact-padding {
        padding-top:15px
    }
}

@media (max-width: 991px) {
    .page-contacts .contact-padding .leave-your-message {
        padding-bottom:15px
    }
}

@media (max-width: 767px) {
    .page-contacts .contact-padding .leave-your-message {
        padding-bottom:0
    }
}

.page-contacts .contact-padding .leave-your-message h3 {
    margin-bottom: 12px;
    font-size: 22px;
    font-weight: 600
}

.page-contacts .contact-padding .leave-your-message p {
    color: #777
}

.page-contacts .contact-padding #contact {
    background: #fff;
    padding: 30px;
    -webkit-box-shadow: 0 0 1.25rem rgba(108,118,134,0.1);
    box-shadow: 0 0 1.25rem rgba(108,118,134,0.1)
}

@media (max-width: 767px) {
    .page-contacts .contact-padding #contact {
        padding:0;
        -webkit-box-shadow: none;
        box-shadow: none
    }
}

.page-contacts .contact-padding #contact .form-group label {
    font-weight: 500
}

.page-contacts .contact-padding #contact .form-group input,.page-contacts .contact-padding #contact .form-group textarea {
    border-color: #eee
}

.page-contacts .cleanza-maps iframe {
    width: 100%;
    height: 300px
}

</style>
<div class="contact margin-bottom-20 page-contacts">
        		<h1 class="title-head text-center d-none">Liên hệ với chúng tôi</h1>
		<div class="container">            
            <div class="clearfix"></div>
			<div class="row hidden">
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="-61 0 443 443.288" width="20px">
								<path d="m96.144531 136v88h32v-56c0-4.417969 3.582031-8 8-8h48c4.417969 0 8 3.582031 8 8v56h32v-88c0-4.417969 3.582031-8 8-8h8.480469l-80.480469-61.902344-80.480469 61.902344h8.480469c4.417969 0 8 3.582031 8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
								<path d="m144.144531 176h32v48h-32zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
								<path d="m160.144531 443.289062c30.101563-37.585937 160-204.328124 160-283.289062 0-88.367188-71.636719-160-160-160-88.367187 0-160 71.632812-160 160 0 78.976562 129.894531 245.710938 160 283.289062zm-108.878906-313.601562 104-80c2.875-2.214844 6.882813-2.214844 9.757813 0l104 80c2.691406 2.097656 3.757812 5.667969 2.65625 8.894531-1.097657 3.226563-4.125 5.402344-7.535157 5.417969h-24v88c0 4.417969-3.582031 8-8 8h-144c-4.417969 0-8-3.582031-8-8v-88h-24c-3.421875 0-6.464843-2.179688-7.570312-5.421875-1.101563-3.242187-.019531-6.824219 2.691406-8.914063zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
							</svg>
						</div>
						<div class="content">
							<h4>Trụ sở chính</h4>
							<p>Tổ dân phố Tứ Mỹ, Phường Phùng Chí Kiên, Thị xã Mỹ Hào, Tỉnh Hưng Yên, Việt Nam</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve" width="20px" height="20px">
								<path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
								<path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
								<path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path>
							</svg>
						</div>
						<div class="content">
							<h4>Điện thoại</h4>
							<a href="tel:0981510593" title="0981510593">0981510593</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 437.676 437.676" style="enable-background:new 0 0 437.676 437.676;" xml:space="preserve" width="20px" height="20px" class="">
								<polygon points="218.841,256.659 19.744,81.824 417.931,81.824  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon>
								<polygon points="139.529,218.781 0,341.311 0,96.252  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon>
								<polygon points="157.615,234.665 218.841,288.427 280.055,234.665 418.057,355.852 19.619,355.852  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon>
								<polygon points="298.141,218.787 437.676,96.252 437.676,341.311  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon>
							</svg>
						</div>
						<div class="content">
							<h4>Email</h4>
							<a href="mailto:dientuxuananh68@gmail.com" title="dientuxuananh68@gmail.com">dientuxuananh68@gmail.com</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-contact_page " id="section-contact_page--0">
    <div class="_container">
        <div class="row">
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="-61 0 443 443.288" width="20px" style="margin-top:14px;"> 								<path d="m96.144531 136v88h32v-56c0-4.417969 3.582031-8 8-8h48c4.417969 0 8 3.582031 8 8v56h32v-88c0-4.417969 3.582031-8 8-8h8.480469l-80.480469-61.902344-80.480469 61.902344h8.480469c4.417969 0 8 3.582031 8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m144.144531 176h32v48h-32zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m160.144531 443.289062c30.101563-37.585937 160-204.328124 160-283.289062 0-88.367188-71.636719-160-160-160-88.367187 0-160 71.632812-160 160 0 78.976562 129.894531 245.710938 160 283.289062zm-108.878906-313.601562 104-80c2.875-2.214844 6.882813-2.214844 9.757813 0l104 80c2.691406 2.097656 3.757812 5.667969 2.65625 8.894531-1.097657 3.226563-4.125 5.402344-7.535157 5.417969h-24v88c0 4.417969-3.582031 8-8 8h-144c-4.417969 0-8-3.582031-8-8v-88h-24c-3.421875 0-6.464843-2.179688-7.570312-5.421875-1.101563-3.242187-.019531-6.824219 2.691406-8.914063zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Trụ sở chính</h4>
							<div class="content__desc"><p>Tổ dân phố Tứ Mỹ, Phường Phùng Chí Kiên, Thị xã Mỹ Hào, Tỉnh Hưng Yên, Việt Nam</p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="margin-top:14px;enable-background:new 0 0 480.56 480.56;" xml:space="preserve" width="20px" height="20px"> 								<path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Điện thoại</h4>
							<div class="content__desc"><p><a title="0965832031" href="tel:0965832031"> 0965 832 031</a></p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg  xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 437.676 437.676" style="margin-top:14px;enable-background:new 0 0 437.676 437.676;" xml:space="preserve" width="20px" height="20px" class=""> 								<polygon points="218.841,256.659 19.744,81.824 417.931,81.824  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="139.529,218.781 0,341.311 0,96.252  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="157.615,234.665 218.841,288.427 280.055,234.665 418.057,355.852 19.619,355.852  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="298.141,218.787 437.676,96.252 437.676,341.311  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Email</h4>
							<div class="content__desc"><p><a title="dientuxuananh68@gmail.com" href="mailto:dientuxuananh68@gmail.com">dientuxuananh68@gmail.com</a></p></div>
						</div>
					</div>
				</div>
                    </div>
    </div>
</div><div class="section-contact_page " id="section-contact_page--1">
    <div class="_container">
        <div class="row">
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="-61 0 443 443.288" width="20px" style="margin-top:14px;"> 								<path d="m96.144531 136v88h32v-56c0-4.417969 3.582031-8 8-8h48c4.417969 0 8 3.582031 8 8v56h32v-88c0-4.417969 3.582031-8 8-8h8.480469l-80.480469-61.902344-80.480469 61.902344h8.480469c4.417969 0 8 3.582031 8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m144.144531 176h32v48h-32zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m160.144531 443.289062c30.101563-37.585937 160-204.328124 160-283.289062 0-88.367188-71.636719-160-160-160-88.367187 0-160 71.632812-160 160 0 78.976562 129.894531 245.710938 160 283.289062zm-108.878906-313.601562 104-80c2.875-2.214844 6.882813-2.214844 9.757813 0l104 80c2.691406 2.097656 3.757812 5.667969 2.65625 8.894531-1.097657 3.226563-4.125 5.402344-7.535157 5.417969h-24v88c0 4.417969-3.582031 8-8 8h-144c-4.417969 0-8-3.582031-8-8v-88h-24c-3.421875 0-6.464843-2.179688-7.570312-5.421875-1.101563-3.242187-.019531-6.824219 2.691406-8.914063zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Văn phòng đại diện và trung tâm bảo hành</h4>
							<div class="content__desc"><p>Số 707 - Đường Nguyễn Văn Linh - Phường Bần Yên Nhân - TX Mỹ Hào - Tỉnh Hưng Yên</p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="margin-top:14px;enable-background:new 0 0 480.56 480.56;" xml:space="preserve" width="20px" height="20px"> 								<path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Điện thoại</h4>
							<div class="content__desc"><p><a title="0981 510 593" href="tel:0981 510 593">0981 510 593</a></p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 437.676 437.676" style="margin-top:14px;enable-background:new 0 0 437.676 437.676;" xml:space="preserve" width="20px" height="20px" class=""> 								<polygon points="218.841,256.659 19.744,81.824 417.931,81.824  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="139.529,218.781 0,341.311 0,96.252  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="157.615,234.665 218.841,288.427 280.055,234.665 418.057,355.852 19.619,355.852  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="298.141,218.787 437.676,96.252 437.676,341.311  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Email</h4>
							<div class="content__desc"><p><a title="dientuxuananh68@gmail.com" href="mailto:dientuxuananh68@gmail.com">dientuxuananh68@gmail.com</a></p></div>
						</div>
					</div>
				</div>
                    </div>
    </div>
</div><div class="section-contact_page " id="section-contact_page--2">
    <!-- <div class="_container">
        <div class="row">
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="-61 0 443 443.288" width="20px"> 								<path d="m96.144531 136v88h32v-56c0-4.417969 3.582031-8 8-8h48c4.417969 0 8 3.582031 8 8v56h32v-88c0-4.417969 3.582031-8 8-8h8.480469l-80.480469-61.902344-80.480469 61.902344h8.480469c4.417969 0 8 3.582031 8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m144.144531 176h32v48h-32zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="m160.144531 443.289062c30.101563-37.585937 160-204.328124 160-283.289062 0-88.367188-71.636719-160-160-160-88.367187 0-160 71.632812-160 160 0 78.976562 129.894531 245.710938 160 283.289062zm-108.878906-313.601562 104-80c2.875-2.214844 6.882813-2.214844 9.757813 0l104 80c2.691406 2.097656 3.757812 5.667969 2.65625 8.894531-1.097657 3.226563-4.125 5.402344-7.535157 5.417969h-24v88c0 4.417969-3.582031 8-8 8h-144c-4.417969 0-8-3.582031-8-8v-88h-24c-3.421875 0-6.464843-2.179688-7.570312-5.421875-1.101563-3.242187-.019531-6.824219 2.691406-8.914063zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">VP Hưng Yên</h4>
							<div class="content__desc"><p>Số 707 - Đường Nguyễn Văn Linh - Phường Bần Yên Nhân - TX Mỹ Hào - Tỉnh Hưng Yên</p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve" width="20px" height="20px"> 								<path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 								<path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></path> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Điện thoại</h4>
							<div class="content__desc"><p><a title="0981510593" href="tel:0981510593">0981 510 593</a></p></div>
						</div>
					</div>
				</div>
                            <div class="col-lg-4 col-md-4">
					<div class="contact-box" style="margin-top:15px;">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 437.676 437.676" style="enable-background:new 0 0 437.676 437.676;" xml:space="preserve" width="20px" height="20px" class=""> 								<polygon points="218.841,256.659 19.744,81.824 417.931,81.824  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="139.529,218.781 0,341.311 0,96.252  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="157.615,234.665 218.841,288.427 280.055,234.665 418.057,355.852 19.619,355.852  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 								<polygon points="298.141,218.787 437.676,96.252 437.676,341.311  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074"></polygon> 							</svg>						</div>
						<div class="content">
							<h4 class="content__tile">Email</h4>
							<div class="content__desc"><p><a title="dientuxuananh68@gmail.com" href="mailto:dientuxuananh68@gmail.com">dientuxuananh68@gmail.com</a></p></div>
						</div>
					</div>
				</div>
                    </div>
    </div> -->
</div><!-- Custom view: add 1 in 3 class after class "wrapper-newsletter":
    - one_column_with_bg
    - two_column_with_bg
    - two_column_with_description
--> 

<link type="text/css" rel="stylesheet" href="catalog/view/theme/default/stylesheet/newsletter.css">
<div class="fancybox_0 wrapper-newsletter  contact__page" id="contact__page--0">
            <form class="form-newsletter" id="form-newsletter-0" method="post" action="checkout/checkout">
               
               
                <div class="form-newsletter__inside">
                    <input type="hidden" name="module_code" value="newsletter.432">
                                            <input type="hidden" name="api_link" value="">
                                        <input type="hidden" name="required" value="{&quot;email&quot;:&quot;1&quot;,&quot;name&quot;:&quot;1&quot;,&quot;phone&quot;:&quot;1&quot;,&quot;company&quot;:&quot;1&quot;}">
                    <div class="row">
                            <div class="col-sm-4">
                                 <div class="_form-newsletter__heading">
                                    <h2>THÔNG TIN LIÊN HỆ</h2>
                                </div>
                                 <div class="_form-newsletter__desc">
                                       <p><span class="text"><strong>PHÒNG KINH DOANH - TƯ VẤN KHÁCH HÀNG</strong>:</span></p>
<p><span class="text">Mr. Nguyễn Trung Dũng - GĐ</span></p>
<p><span class="text">Email: <span class="rynqvb" style="color: #000000;"><a style="color: #000000; text-decoration: underline;" href="mailto:dientuxuananh68@gmail.com"><span>dientuxuananh68@gmail.com</span></a></span></span></p>
<p><span class="text">Phone: 0981510593</span></p>
<p>&nbsp;</p>                                    </div>
                            </div>
                            <div class="col-sm-8">
                              <div class="form__contact">
                                    <div class="row">
                                                                            <div class="col-sm-6" style="margin-bottom: 10px;">
                                            <label>Tên </label>
                                            <input type="text" name="name" class="form-control name required" placeholder="Tên ">
                                            <p style="text-align:left;padding:0;margin:0;"><span id="sub_errorname0"></span></p>
                                        </div>
                                    
                                                                            <div class="col-sm-6" style="margin-bottom: 10px;">
                                            <label>Điện thoại</label>
                                            <input type="text" name="phone" class="form-control phone required" placeholder="Điện thoại">
                                            <p style="text-align:left;padding:0;margin:0;"><span id="sub_errorphone0"></span></p>
                                        </div>
                                                                        
                                                                            <div class="col-sm-6" style="margin-bottom: 10px;">
                                            <label>Email</label>
                                            <input type="text" class="form-control email required" name="email" placeholder="Email">
                                            <p style="text-align:left;padding:0;margin:0;"><span id="sub_erroremail0"></span></p>
                                            <p style="text-align:left;padding:0;margin:0;"><span id="sub_validemail0"></span></p>
                                        </div>
                                    
                                    
                                                                            <div class="col-sm-6" style="margin-bottom: 10px;">
                                             <label>Công ty</label>
                                            <input type="text" name="company" class="form-control company required" placeholder="Công ty">
                                            <p style="text-align:left;padding:0;margin:0;"><span id="sub_errorcompany0"></span></p>
                                        </div>
                                                                    </div>
                                
                                <div class="row">
                                                                                                                                                <div class="col-sm-12" style="margin-bottom: 10px;">
                                                                                                                                            <label>Yêu cầu báo giá/Yêu cầu cung cấp tài liệu</label>
                                                    <textarea name="custom[1][value]" class="form-control" placeholder="Yêu cầu báo giá/Yêu cầu cung cấp tài liệu"></textarea>
                                                                                                <!--<input type="file" id="myFile" name="custom[1][value]" class="hidden" placeholder="Yêu cầu báo giá/Yêu cầu cung cấp tài liệu">
                                                    <label for="myFile"> 
                                                        <span class="upload-text" id="button-upload">
                                                            <span><i class="fa fa-upload" aria-hidden="true"></i> Upload file: </span>
                                                        </span>
                                                    </label>
                                                    <span id="file-chosen" style="font-size: 12px;">Yêu cầu báo giá/Yêu cầu cung cấp tài liệu</span>
                                                    <script>
                                                        $(document).ready(function(){
                                                            $('#myFile').change(function(){
                                                              $('#file-chosen').html(this.files[0].name);
                                                            });
                                                        });
                                                    </script>-->
                                                                                                                                        <input type="hidden" name="custom[1][name][1]" value="Yêu cầu báo giá/Yêu cầu cung cấp tài liệu">
                                                                                            <input type="hidden" name="custom[1][name][5]" value="Request a quote/Request for documents">
                                                                                        <p style="text-align:left;padding:0;margin:0;"><span id="errorcustom1"></span></p>
                                        </div>
                                                                                                                    <div class="col-sm-12" style="margin-bottom: 10px;">
                                                                                                                                            <label>Sản phẩm quan tâm</label>
                                                    <input type="text" name="custom[2][value]" class="form-control" placeholder="Sản phẩm quan tâm">
                                                                                                <!--<input type="file" id="myFile" name="custom[2][value]" class="hidden" placeholder="Sản phẩm quan tâm">
                                                    <label for="myFile"> 
                                                        <span class="upload-text" id="button-upload">
                                                            <span><i class="fa fa-upload" aria-hidden="true"></i> Upload file: </span>
                                                        </span>
                                                    </label>
                                                    <span id="file-chosen" style="font-size: 12px;">Sản phẩm quan tâm</span>
                                                    <script>
                                                        $(document).ready(function(){
                                                            $('#myFile').change(function(){
                                                              $('#file-chosen').html(this.files[0].name);
                                                            });
                                                        });
                                                    </script>-->
                                                                                                                                        <input type="hidden" name="custom[2][name][1]" value="Sản phẩm quan tâm">
                                                                                            <input type="hidden" name="custom[2][name][5]" value="Products of interest">
                                                                                        <p style="text-align:left;padding:0;margin:0;"><span id="errorcustom2"></span></p>
                                        </div>
                                                                                                                                            </div>
                               
                                <div class="btn-action">
                                    <button type="submit" name="submitNewsletter" class="btn btn-blues btn-style btn-style-active" value="Subscribe">GỬI</button>
                                </div>
                                 <p class="form-newsletter__notification"></p>
                                <div class="valid"></div>
                              </div>
                            </div>
                    </div>
                </div>
                <input type="hidden" value="1" name="action">
            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">03AFcWeA5V7ZWenSF2DjQ7_ccOjhXNxuiGngg4X4dOBOx0ed5i4FDlWxeyGHc7ZVzkHlcBVzfCiXR73kZlHpibVUYsx1C0qkdMTQSBrfDWgjIvVk53tihbkqAnFSugMZPe_jOwWhxgJ_e6yqM768s7C0ymnNF2gk1eegFbUD3rrRszkQzJ1rZNB6R5WFivu-C7kW4DvyTv22aBurdvUs7Bi53YhpKMwDZCU26Ga4sWv-8xlj3GW8Su7nKnfTlRTZGN2KDg82usLTFU3wJO-5z3sqPN2Dp3ZBF2FnIFMqdfcN6Oo2_KvRIh4VmFiRKvpeE6Px9O61BfyE62ZoQeQtqjunkkUffJWm4t1CaweyQ4vObFr9SCZjdRrKmROmGv6Q75V6XTgL71M0sa1_xvpzWo5qVKMAMJqpWNgBUkP48vi3LlgB0IbulbhZNU09Cea4s-NcCCFQFdETzXKF6NyRn5Eu4agP0ovjaLlmIx-wtwhEnkXrTtf-cB78TxbceS_Osde9jOvmlsf7xNFMCByZW3QlRXGyNIahWJB1HG0wEok3VzJbre9SMivobJsBquj9otsCfTx-EoJld6CUqtXdJaSOyyFmEUfBp675GOk6zJSTdg5dyrMgr-KplFEtXzNicLE39Oov7uA0_aHMhKSunnULpawu67SNHMDVIDS8kXZ4pHKOZLm4tNEl2SM7-5aVt8zuYhOhdIFQ9lj8wBR0Qw6gY79DNvPx-AwVlfbbyDKJQMkTc2tc3rVQKbmnbu1bSXJo3TbzER_-mjT6gYt2kwwaQQqI-dXlKqkWeK63unSl8Q_OrUTkwheeafTVU1Fh6tgEHgfsdnGCnepfLZjZ6jMNHm91Cp0pVB8xjZ3r8o-yCvqMQzUwVAC68JffEqRJJcjHvDED3uyF_N8XRySLCn59KX413BIv-p5KA4Db-PaLCzVkIBdC1hpL6sf1ugcOSoQ41gfRdXcNE_w5nD2QCP_DcggVN0rL56yUipJz2Ci2y1jQKh65qLo8GyG8HD6y2XHjxY-m6LefSk-vPfg1a8x5R8vG6A-agfCA3e-bDr4ZTWfQG2u2NpvKq6CvvhObgo6MlRjqNPUZ_CxyDpe0Yqn1C5Hueo9wSgU_1hMn9BFMtBU7oQo88AHTIgtFYAkBX84kVB7bAgGPSSJIc25jw-Cko-GLOcJw-NjdUma5MkKKX7jZQGQbx4cbpmmAf6UzfFwY7Zav9ChR1BGsTesFRcBkY3voy-wVLJrvu7q4G427vIqEe1aRlF1W8gsk5APM-DXcx7LwV8x68qlFS4ccTx_Wu7Jr6szNFTXiPKVBp39Py4Pj7d-HvuybEP1nducC0XegK-GdoRnkhNzaW5Sdg95-X7T0Inx8QGI8edcl4ExD4wxRMbE9QJidkm1nPjRF1oUJWHQHMYjjQJ-sjg_cNNe9fLJZByJ8wKtRbowXtJ7kZ0XQ3Xc1JacKBVNzw0VxMYNz6aPnL43QrIi5IfmbxIVcO6o9okPa4ivQOmSgErvriyGndYwxbTcEltqjMv3YNJUTa3mzeUHSJ8_EGMSF6neOcAokaAYIZeiGMe9go3HfohXT7eKD1hRN_6sE4oahACq-r4oAQyjEHVxAEL3n3ic_LWvfWn7lEBrwZzU2-VKoGqFXYfO-nazOlhEa_6WYqpE7nSvm7-J0ZAZv6GwjGmxFEuxSVdkO3IH-2Alqx1ZAXhmovkE2GRCpEujZ_PmASONdx4gphopiDyGrsf5awNLbd-nvF1JCDfdY18Nv93Z6a41wXetzWl7z1rCFxoeAJIOHL-L83SbBpDmkk6XfnzyjkGfYul_5RIiw</textarea><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">03AFcWeA5AFbo7NkHwjXqTGvk7ToJbsDOdny1vC_l1I3kcrHZyqEFEeIFmHMWqVwKSdFBi3-zbmrACgoJqSwx9tsPnOVeGErdyX4O3Cs2HLDScLMq5MyfQJPR-cJcM8U-cIEkLhlWCiDVsoTrhCwzWuXkBWhx6Nxt9zSqFudSvmOvwWM8CO3gUaNKkFltrwiBdwXNOsgmw-hiG4zV6RowDXmgXSiMb19hHOl51fq5_U4j-uakTITl6pkNSs3sM58xzEGPYTVWGRgwQLm6IY4KdmOIh5lX75maogoooyp536bkHCvQstBN_6BtEbQvg32F58Yzt2SNDq6_Kex_mzXuwPhBCHKsilUHaHR2CQNWHwIYkHv2EhPhfwCyZjJ7joqOa1te1PV5oXKK9f3Bqh_NsSL4EIvjTeZtGjLcsZgKQie2tZkgrGKpwuM1HrMm1wLjwpWczYptPjIHu_vKLVxoAQ5OVEN7fQPlOPZRsozWd-rOwjXWYjvGCT3scnSBghgYGtDUShsSqFSQDed_xCctSTH_K9AFg75klJouDvnSd-CzStYJgy93bw2k50beT31PlxcRIUqgZdkwZNeumJv1ZQOXU3h7M4eB1DBJ3USK8qGKK4Y-GyWqoRTg_a3uB-JwltIkUYIp3Edfi3EyoDXalkwnI7rCdLXVEEzIZBOExvjVhwN2J-P7UgLtk1rLrlJPDbSaqpkqsA5S5Vf8_gldvFjXZ72Tfh-6gojkevl5z8NFl7n_WabwcE698teehK51Dpz4me7aTsSR0E2jVAqe8tOAtslcTVb6L60hbX6A8mR8KLE2z3gR-YYKlN0MCk1Rg2oIoPj7wh7v9DecpLKxMyabbUU6Q6jJocI81k9ts2ZrByUz_isctTTQ8rk-SB_DT28AQQ5K5COxxMk7Q1yuq35PUkcHw4T1H6vmX37G4ggwnXYNejjI2BXSrBvUp7DcHG52kFEbqweA073tEDPylVZtyIFMpYqQRUvDf4Tdo8Pz-9uXBC-91ok3KOkKI5X-k4WIKGZ9igircpCwNxga6kCfT92_YMjLkI7cKBEDogRUx6Czl5jVlWCeaCg-fBOskKXkElSSsl2wNcczcur2PXUOkmSOkb-0Y08AXX0WDAuVn7Cuw3TWk7JfifvjU3U8nJjQr-5LZ_zQj2D3npwR0HZDE24pX3SW8dICb4s1zs-R5shI0qwIFrSFTOpg7TNfGJIOni6MIxeOb401Zj9-hT_u0wUf93aSw_XcBKzQH0o79LHF6VN4rOZp7CU2I79XnTr0d6Ptlyx-rZcvKmrzrkO5UyIz2Q3LTbfVh_41Gkg11XZOCINdqMShICE98llh__3a8YoaQ6wuFxiGS9g8bVtOQLT899C9vtV4KCclOBGj00-CLiUpyfff3ksTuq6APCww8aaLqpLbZmSs1UrphUMHJH4QblTwB9pgWSRf2Pl-CCH8PaKs69Wt-dRWpJ5LjsG4b1I5G7O_ZvI1geQPg7OwvgnE5MZjg0Yr7keGbkxdoTZfoKul_GkbEXwHAXujCniot6wmm_LV5eKYziSUOj7JXvqyRkG-rlmAsWBB6goT1uK0QK7fUrsE2kAwCjSQmYbaiUqiN5iIUBnOGnUfVTYpY3iyHsRot5zwgpRxxoDX8NQOhz-Wjq4S5ewKAgEyvWSyRbWn_QcvT6t5YXumNax5OCQpyPTmglrru0bv5VZ_VdRxO67-9Jnlg_NGtqQH8Q994aIUlcd3NW3bGq1eGXdS_ZIuYMUUrxaPLizDFz-Yuy3L-n6n2PcyVS6EMIwGz4qbnR4thT9_FRY7Djlbt_s4yFnqN4V5xSQ</textarea></form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#form-newsletter-0').on('submit', function () {
            var url = "/extension/module/newsletter/addCustomer";
            $.ajax({
                type: "post",
                url: url,
                data: $("#form-newsletter-0").serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('button[type="submit"]').html('Đăng ký <i class="fa fa-refresh fa-spin fa-fw"></i>');
                    $('button[type="submit"]').attr('disabled', 'disabled');
                },
                complete: function () {
                    $('button[type="submit"]').html('GỬI');
                    $('button[type="submit"]').removeAttr('disabled');
                },
                success: function (json) {
                    $('[id^="sub_error"]').html('');
                    $('[id^="errorcustom"]').html('');

                    if (json['error']) {
                        jQuery.each( json['errorMassage'], function( i, val ){
                            if(i == 'custom'){
                                jQuery.each( val, function( i, value ){
                                    $('#errorcustom' + i).html(value);
                                });
                            } else {
                                $('#sub_error'+i+'0').html(val);
                            }
                        });
                    } else {
                        $('[id^="sub_error"]').html('');
                        $('.form-newsletter__notification').html("<div class=\"alert alert-success\" role=\"alert\">!<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>");

                        $('#form-newsletter-0').trigger('reset');
                    }
                }
            });
            return false;
        });
    });

    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }
</script>

<!-- popup -->

<!-- end popup -->			<div class="row contact-padding">
				<div class="col-lg-4 col-md-12">
					<div class="leave-your-message">
						<h3>Thông tin liên hệ</h3>
												<p>
							Mở cửa 8:00-17:30: Thứ 2 - Thứ 7						</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-12" id="lazy-container">
					<form action="https://samiface.vn/lien-he" class="has-validation-callback" accept-charset="utf-8" method="post" enctype="multipart/form-data" id="contact">
						<p id="errorFills" style="margin-bottom:10px; color: red;"></p>
						<div class="form-signup clearfix">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<fieldset class="form-group">
										<label>Tên đầy đủ: <span class="required">*</span>
										</label>
										<input type="text" placeholder="Tên của bạn" value="" name="name" id="name" class="form-control form-control-lg" required="">
																			</fieldset>
								</div>
								<div class="col-sm-6 col-xs-12">
									<fieldset class="form-group">
										<label>Email: <span class="required">*</span>
										</label>
										<input type="email" value="" placeholder="Địa chỉ Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" name="email" id="email" class="form-control form-control-lg" required="">
																			</fieldset>
								</div>
								<div class="col-sm-12 col-xs-12">
									<fieldset class="form-group">
										<label>Nội dung: <span class="required">*</span>
										</label>
										<textarea name="enquiry" rows="6" id="comment" placeholder="Nội dung" class="form-control form-control-lg"></textarea>
																			</fieldset>
									<fieldset class="form-group required"><script src="https://www.google.com/recaptcha/enterprise.js?render=6LfWKiAlAAAAANtsD7mjgBaQXIrGrf5etJEbjm2t"></script>
<script>
	grecaptcha.enterprise.ready(function() {
		grecaptcha.enterprise.execute('6LfWKiAlAAAAANtsD7mjgBaQXIrGrf5etJEbjm2t', {
			action: 'login'
		}).then(function(token) {
		    $('form').append(`<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">${token}</textarea>`);
		});
	});
</script></fieldset>
									<div class="pull-xs-left" style="margin-top:20px;">
										<button type="submit" class="btn btn-blues btn-style btn-style-active" style="padding:0 40px;text-transform: inherit;">
											Gửi đi</button>
									</div>
								</div>
							</div>
						</div>
					<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">03AFcWeA5V7ZWenSF2DjQ7_ccOjhXNxuiGngg4X4dOBOx0ed5i4FDlWxeyGHc7ZVzkHlcBVzfCiXR73kZlHpibVUYsx1C0qkdMTQSBrfDWgjIvVk53tihbkqAnFSugMZPe_jOwWhxgJ_e6yqM768s7C0ymnNF2gk1eegFbUD3rrRszkQzJ1rZNB6R5WFivu-C7kW4DvyTv22aBurdvUs7Bi53YhpKMwDZCU26Ga4sWv-8xlj3GW8Su7nKnfTlRTZGN2KDg82usLTFU3wJO-5z3sqPN2Dp3ZBF2FnIFMqdfcN6Oo2_KvRIh4VmFiRKvpeE6Px9O61BfyE62ZoQeQtqjunkkUffJWm4t1CaweyQ4vObFr9SCZjdRrKmROmGv6Q75V6XTgL71M0sa1_xvpzWo5qVKMAMJqpWNgBUkP48vi3LlgB0IbulbhZNU09Cea4s-NcCCFQFdETzXKF6NyRn5Eu4agP0ovjaLlmIx-wtwhEnkXrTtf-cB78TxbceS_Osde9jOvmlsf7xNFMCByZW3QlRXGyNIahWJB1HG0wEok3VzJbre9SMivobJsBquj9otsCfTx-EoJld6CUqtXdJaSOyyFmEUfBp675GOk6zJSTdg5dyrMgr-KplFEtXzNicLE39Oov7uA0_aHMhKSunnULpawu67SNHMDVIDS8kXZ4pHKOZLm4tNEl2SM7-5aVt8zuYhOhdIFQ9lj8wBR0Qw6gY79DNvPx-AwVlfbbyDKJQMkTc2tc3rVQKbmnbu1bSXJo3TbzER_-mjT6gYt2kwwaQQqI-dXlKqkWeK63unSl8Q_OrUTkwheeafTVU1Fh6tgEHgfsdnGCnepfLZjZ6jMNHm91Cp0pVB8xjZ3r8o-yCvqMQzUwVAC68JffEqRJJcjHvDED3uyF_N8XRySLCn59KX413BIv-p5KA4Db-PaLCzVkIBdC1hpL6sf1ugcOSoQ41gfRdXcNE_w5nD2QCP_DcggVN0rL56yUipJz2Ci2y1jQKh65qLo8GyG8HD6y2XHjxY-m6LefSk-vPfg1a8x5R8vG6A-agfCA3e-bDr4ZTWfQG2u2NpvKq6CvvhObgo6MlRjqNPUZ_CxyDpe0Yqn1C5Hueo9wSgU_1hMn9BFMtBU7oQo88AHTIgtFYAkBX84kVB7bAgGPSSJIc25jw-Cko-GLOcJw-NjdUma5MkKKX7jZQGQbx4cbpmmAf6UzfFwY7Zav9ChR1BGsTesFRcBkY3voy-wVLJrvu7q4G427vIqEe1aRlF1W8gsk5APM-DXcx7LwV8x68qlFS4ccTx_Wu7Jr6szNFTXiPKVBp39Py4Pj7d-HvuybEP1nducC0XegK-GdoRnkhNzaW5Sdg95-X7T0Inx8QGI8edcl4ExD4wxRMbE9QJidkm1nPjRF1oUJWHQHMYjjQJ-sjg_cNNe9fLJZByJ8wKtRbowXtJ7kZ0XQ3Xc1JacKBVNzw0VxMYNz6aPnL43QrIi5IfmbxIVcO6o9okPa4ivQOmSgErvriyGndYwxbTcEltqjMv3YNJUTa3mzeUHSJ8_EGMSF6neOcAokaAYIZeiGMe9go3HfohXT7eKD1hRN_6sE4oahACq-r4oAQyjEHVxAEL3n3ic_LWvfWn7lEBrwZzU2-VKoGqFXYfO-nazOlhEa_6WYqpE7nSvm7-J0ZAZv6GwjGmxFEuxSVdkO3IH-2Alqx1ZAXhmovkE2GRCpEujZ_PmASONdx4gphopiDyGrsf5awNLbd-nvF1JCDfdY18Nv93Z6a41wXetzWl7z1rCFxoeAJIOHL-L83SbBpDmkk6XfnzyjkGfYul_5RIiw</textarea><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">03AFcWeA5AFbo7NkHwjXqTGvk7ToJbsDOdny1vC_l1I3kcrHZyqEFEeIFmHMWqVwKSdFBi3-zbmrACgoJqSwx9tsPnOVeGErdyX4O3Cs2HLDScLMq5MyfQJPR-cJcM8U-cIEkLhlWCiDVsoTrhCwzWuXkBWhx6Nxt9zSqFudSvmOvwWM8CO3gUaNKkFltrwiBdwXNOsgmw-hiG4zV6RowDXmgXSiMb19hHOl51fq5_U4j-uakTITl6pkNSs3sM58xzEGPYTVWGRgwQLm6IY4KdmOIh5lX75maogoooyp536bkHCvQstBN_6BtEbQvg32F58Yzt2SNDq6_Kex_mzXuwPhBCHKsilUHaHR2CQNWHwIYkHv2EhPhfwCyZjJ7joqOa1te1PV5oXKK9f3Bqh_NsSL4EIvjTeZtGjLcsZgKQie2tZkgrGKpwuM1HrMm1wLjwpWczYptPjIHu_vKLVxoAQ5OVEN7fQPlOPZRsozWd-rOwjXWYjvGCT3scnSBghgYGtDUShsSqFSQDed_xCctSTH_K9AFg75klJouDvnSd-CzStYJgy93bw2k50beT31PlxcRIUqgZdkwZNeumJv1ZQOXU3h7M4eB1DBJ3USK8qGKK4Y-GyWqoRTg_a3uB-JwltIkUYIp3Edfi3EyoDXalkwnI7rCdLXVEEzIZBOExvjVhwN2J-P7UgLtk1rLrlJPDbSaqpkqsA5S5Vf8_gldvFjXZ72Tfh-6gojkevl5z8NFl7n_WabwcE698teehK51Dpz4me7aTsSR0E2jVAqe8tOAtslcTVb6L60hbX6A8mR8KLE2z3gR-YYKlN0MCk1Rg2oIoPj7wh7v9DecpLKxMyabbUU6Q6jJocI81k9ts2ZrByUz_isctTTQ8rk-SB_DT28AQQ5K5COxxMk7Q1yuq35PUkcHw4T1H6vmX37G4ggwnXYNejjI2BXSrBvUp7DcHG52kFEbqweA073tEDPylVZtyIFMpYqQRUvDf4Tdo8Pz-9uXBC-91ok3KOkKI5X-k4WIKGZ9igircpCwNxga6kCfT92_YMjLkI7cKBEDogRUx6Czl5jVlWCeaCg-fBOskKXkElSSsl2wNcczcur2PXUOkmSOkb-0Y08AXX0WDAuVn7Cuw3TWk7JfifvjU3U8nJjQr-5LZ_zQj2D3npwR0HZDE24pX3SW8dICb4s1zs-R5shI0qwIFrSFTOpg7TNfGJIOni6MIxeOb401Zj9-hT_u0wUf93aSw_XcBKzQH0o79LHF6VN4rOZp7CU2I79XnTr0d6Ptlyx-rZcvKmrzrkO5UyIz2Q3LTbfVh_41Gkg11XZOCINdqMShICE98llh__3a8YoaQ6wuFxiGS9g8bVtOQLT899C9vtV4KCclOBGj00-CLiUpyfff3ksTuq6APCww8aaLqpLbZmSs1UrphUMHJH4QblTwB9pgWSRf2Pl-CCH8PaKs69Wt-dRWpJ5LjsG4b1I5G7O_ZvI1geQPg7OwvgnE5MZjg0Yr7keGbkxdoTZfoKul_GkbEXwHAXujCniot6wmm_LV5eKYziSUOj7JXvqyRkG-rlmAsWBB6goT1uK0QK7fUrsE2kAwCjSQmYbaiUqiN5iIUBnOGnUfVTYpY3iyHsRot5zwgpRxxoDX8NQOhz-Wjq4S5ewKAgEyvWSyRbWn_QcvT6t5YXumNax5OCQpyPTmglrru0bv5VZ_VdRxO67-9Jnlg_NGtqQH8Q994aIUlcd3NW3bGq1eGXdS_ZIuYMUUrxaPLizDFz-Yuy3L-n6n2PcyVS6EMIwGz4qbnR4thT9_FRY7Djlbt_s4yFnqN4V5xSQ</textarea></form>
				</div>
			</div>
			<div class="row">
				<style>
					.cleanza-maps {
						width: 100%;
					}
					.cleanza-maps .map iframe {
						width: 100%;
						height: 450px
					}
				</style>
				<div class="col-md-12 cleanza-maps">
					<div class="map" id="contact_map">
												<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d232.9247536886844!2d105.97151814424993!3d20.920523159607182!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1705480196542!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>					</div>
				</div>
			</div>
		</div>
        
	</div>
@endsection


