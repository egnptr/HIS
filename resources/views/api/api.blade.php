<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>HIS PROJECT</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Bootstrap 4 Template For Software Startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.icons"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="{{ url('/apicss/assets/fontawesome/js/all.min.js') }}"></script>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/mono-blue.min.css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ url('/apicss/assets/css/theme.css') }}">

</head> 

<body class="docs-page">
    <header class="header fixed-top">
      <div class="branding docs-branding">
        <div class="container-fluid position-relative py-2">
          <div class="docs-logo-wrapper">
            <button
              id="docs-sidebar-toggler"
              class="docs-sidebar-toggler docs-sidebar-visible mr-2 d-xl-none"
              type="button"
            >
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="site-logo">
              <a class="navbar-brand" href="/api"
                ><img
                  class="logo-icon mr-2"
                  src="{{ url('/apicss/assets/images/coderdocs-logo.svg') }}"
                  alt="logo"
                /><span class="logo-text"
                  >HIS<span class="text-alt">Project</span></span
                ></a
              >
            </div>
          </div>
          <!--//docs-logo-wrapper-->
          <div
            class="docs-top-utilities d-flex justify-content-end align-items-center"
          >

            <!--<a-->
            <!--  href="#"-->
            <!--  class="btn btn-primary d-none d-lg-flex"-->
            <!--  >Download</a-->
          </div>
          <!--//docs-top-utilities-->
        </div>
        <!--//container-->
      </div>
      <!--//branding-->
    </header>
    <!--//header-->

    <div class="docs-wrapper">
      <div id="docs-sidebar" class="docs-sidebar">
        <div class="top-search-box d-lg-none p-3">
          <form class="search-form">
            <input
              type="text"
              placeholder="Search the docs..."
              name="search"
              class="form-control search-input"
            />
            <button type="submit" class="btn search-btn" value="Search">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <nav id="docs-nav" class="docs-nav navbar">
          <ul class="section-items list-unstyled nav flex-column pb-3">
            <li class="nav-item section-title">
              <a class="nav-link scrollto active" href="#section-1"
                ><span class="theme-icon-holder mr-2"
                  ><i class="fas fa-map-signs"></i></span
                >Introduction</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#item-1-1">Authentication</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#item-1-2">EMR CRUD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#item-1-3">Receipt CRUD</a>
            </li>
          </ul>
        </nav>
        <!--//docs-nav-->
      </div>
      <!--//docs-sidebar-->
      <div class="docs-content">
        <div class="container">
          <article class="docs-article" id="section-1">
            <header class="docs-header">
              <h1 class="docs-heading">
                Introduction
              </h1>
              <section class="docs-intro">
                <p>Our API service allows CRUD authorization to clients. Currently, our API service includes an Authentication service, as well as CRUD from EMR and Receipt database tables.</p>
              </section>
              <!--//docs-intro-->
            </header>
            <section class="docs-section" id="item-1-1">
              <h2 class="section-heading">Authentication</h2>
              <p>
                Authentication grants users access to CRUD authorization. After
                being authenticated, users can request to create, read, update,
                or delete data. Unauthenticated users are not permitted to use
                CRUD access.
              </p>
              <div class="request">
                <h3 id="request-login">
                  <b class="text-warning">POST</b> - Login
                  <a href="#request-login"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div>
                  <p>
                    Login to informatikamedisuph.com to get token access for
                    RESTful API Services
                  </p>
                </div>

                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-login-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-login-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-login-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X POST -H "Accept: application/json" -d '{
			"email":"matthewjrusty@gmail.com",
			"password":"password"
		}' "http://informatikamedisuph.com/api/login"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-login-example-http">
                      <pre><code class="hljs http">POST /api/login HTTP/1.1
		Host: informatikamedisuph.com
		Accept: application/json
		
		{
			"email":"matthewjrusty@gmail.com",
			"password":"password"
		}</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>

              <div class="request">
				<h3 id="request-logout">
                  <b class="text-success">GET</b> - Logout
                  <a href="#request-logout"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div><p>Log user out (dismiss token usage)</p></div>

                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-logout-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-logout-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-logout-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X GET "http://informatikamedisuph.com/api/logout"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-logout-example-http">
                      <pre><code class="hljs http">GET /api/logout HTTP/1.1 Host: informatikamedisuph.com</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>
            </section>
            <!--//section-->

            <section class="docs-section" id="item-1-2">
              <h2 class="section-heading">EMR CRUD</h2>
              <p>
                EMR CRUD allows users to create, read, update, and delete data
                specifically in the EMR database table. Our EMR CRUD
                authorization have been implemented to work with our Outpatient
                system.
              </p>
              <div class="request">
                <h3 id="request-create-emr">
                  <b class="text-warning">POST</b> - Create EMR
                  <a href="#request-create-emr"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div><p>Create EMR using REST API Service</p></div>

                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-create-emr-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-create-emr-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-create-emr-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X POST -H "Accept: application/json" -d '{
			"id_patient": "2",
			"id_cin": "2",
			"blood_pressure": "120/80",
			"heart_rate": "80",
			"blood_sugar": "100",
			"height": "175",
			"weight": "75",
			"diagnosis": "Sehat"
		}' "http://informatikamedisuph.com/api/EMRS/create"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-create-emr-example-http">
                      <pre><code class="hljs http">POST /api/EMRS/create HTTP/1.1
		Host: informatikamedisuph.com
		Accept: application/json
		
		{
			"id_patient": "2",
			"id_cin": "2",
			"blood_pressure": "120/80",
			"heart_rate": "80",
			"blood_sugar": "100",
			"height": "175",
			"weight": "75",
			"diagnosis": "Sehat"
		}</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>

              <div class="request">
                <h3 id="request-read-emr">
                  <b class="text-success">GET</b> - Read EMR
                  <a href="#request-read-emr"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div><p>Get EMR data using API Service</p></div>

                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-read-emr-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-read-emr-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-read-emr-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X GET -H "Accept: application/json" "http://informatikamedisuph.com/api/EMRS/edit/2"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-read-emr-example-http">
                      <pre><code class="hljs http">GET /api/EMRS/edit/2 HTTP/1.1
		Host: informatikamedisuph.com
		Accept: application/json</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>

              <div class="request">
                <h3 id="request-update-emr">
                  <b class="text-warning">POST</b> - Update EMR
                  <a href="#request-update-emr"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div><p>Update EMR Data using API Service</p></div>

                <div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-update-emr-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-update-emr-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-update-emr-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X POST -H "Accept: application/json" -d '{
			"id_patient": 1,
			"id_cin": 1,
			"blood_pressure": "120/80",
			"heart_rate": "80",
			"blood_sugar": "100",
			"height": "175",
			"weight": "75",
			"diagnosis": "Sehat BANGET !!"
		}' "http://informatikamedisuph.com/api/EMRS/edit/1"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-update-emr-example-http">
                      <pre><code class="hljs http">POST /api/EMRS/edit/1 HTTP/1.1
		Host: informatikamedisuph.com
		Accept: application/json
		
		{
			"id_patient": 1,
			"id_cin": 1,
			"blood_pressure": "120/80",
			"heart_rate": "80",
			"blood_sugar": "100",
			"height": "175",
			"weight": "75",
			"diagnosis": "Sehat BANGET !!"
		}</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>

              <div class="request">
                <h3 id="request-delete-emr">
                  <b class="text-success">GET</b> - Delete EMR
                  <a href="#request-delete-emr"
                    ><i class="glyphicon glyphicon-link"></i
                  ></a>
                </h3>

                <div><p>Delete EMR Data using API Service</p></div>

                <div>
                 <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-delete-emr-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-delete-emr-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="request-delete-emr-example-curl"
                    >
                      <pre><code class="hljs curl">curl -X GET -H "Accept: application/json" "http://informatikamedisuph.com/api/EMRS/delete/16"</code></pre>
                    </div>
                    <div class="tab-pane" id="request-delete-emr-example-http">
                      <pre><code class="hljs http">GET /api/EMRS/delete/16 HTTP/1.1
		Host: informatikamedisuph.com
		Accept: application/json</code></pre>
                    </div>
                  </div>
                </div>

                <hr />
              </div>
            </section>
            <!--//section-->

            <section class="docs-section" id="item-1-3">
              <h2 class="section-heading">Receipt CRUD</h2>
			  <div class="request">
				<h3 id="request-create-receipt">
				  <b class="text-warning">POST</b> - Create Receipt
				  <a href="#request-create-receipt"
					><i class="glyphicon glyphicon-link"></i
				  ></a>
				</h3>
  
				<div>Craete Receipt using REST API Service</div>
  
				<div>
				 <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-create-receipt-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-create-receipt-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
				  <div class="tab-content">
					<div
					  class="tab-pane active"
					  id="request-create-receipt-example-curl"
					>
					  <pre><code class="hljs curl">curl -X POST -H "Accept: application/json" -d '{
	  "type": "Outpatient",
	  "patient_name": "Forrest Bryant",
	  "doctor_name": "Doctor Strange",
	  "room_cost": 1,
	  "service_cost": 1,
	  "medicine_cost": 1,
	  "consumption_cost": 1,
	  "lab_cost": 1,
	  "radiology_cost":1,
	  "total_cost": 6
  }' "http://informatikamedisuph.com/api/Receipts/create"</code></pre>
					</div>
					<div
					  class="tab-pane"
					  id="request-create-receipt-example-http"
					>
					  <pre><code class="hljs http">POST /api/Receipts/create HTTP/1.1
  Host: informatikamedisuph.com
  Accept: application/json
  
  {
	  "type": "Outpatient",
	  "patient_name": "Forrest Bryant",
	  "doctor_name": "Doctor Strange",
	  "room_cost": 1,
	  "service_cost": 1,
	  "medicine_cost": 1,
	  "consumption_cost": 1,
	  "lab_cost": 1,
	  "radiology_cost":1,
	  "total_cost": 6
  }</code></pre>
					</div>
				  </div>
				</div>
  
				<hr />
			  </div>
  
			  <div class="request">
				<h3 id="request-read-receipt">
				  <b class="text-success">GET</b> - Read Receipt
				  <a href="#request-read-receipt"
					><i class="glyphicon glyphicon-link"></i
				  ></a>
				</h3>
  
				<div>
					Get Receipt data using API Service
				</div>
  
				<div>
				 <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-read-receipt-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-read-receipt-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
				  <div class="tab-content">
					<div
					  class="tab-pane active"
					  id="request-read-receipt-example-curl"
					>
					  <pre><code class="hljs curl">curl -X GET "http://informatikamedisuph.com/api/Receipts/edit/2"</code></pre>
					</div>
					<div class="tab-pane" id="request-read-receipt-example-http">
					  <pre><code class="hljs http">GET /api/Receipts/edit/2 HTTP/1.1
  Host: informatikamedisuph.com</code></pre>
					</div>
				  </div>
				</div>
  
				<hr />
			  </div>
  
			  <div class="request">
				<h3 id="request-update-receipt">
				  <b class="text-warning">POST</b> - Update Receipt
				  <a href="#request-update-receipt"
					><i class="glyphicon glyphicon-link"></i
				  ></a>
				</h3>
  
				<div>Update Receipt data using API Service</div>
  
				<div>
				 <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-update-receipt-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-update-receipt-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
				  <div class="tab-content">
					<div
					  class="tab-pane active"
					  id="request-update-receipt-example-curl"
					>
					  <pre><code class="hljs curl">curl -X POST -H "Accept: application/json" -d '{
	  "type": "Outpatient",
	  "patient_name": "Forrest Bryant",
	  "doctor_name": "Doctor Strange",
	  "room_cost": 1,
	  "service_cost": 1,
	  "medicine_cost": 1,
	  "consumption_cost": 1,
	  "lab_cost": 1,
	  "radiology_cost":1,
	  "total_cost": 10000
  }' "http://informatikamedisuph.com/api/Receipts/edit/2"</code></pre>
					</div>
					<div
					  class="tab-pane"
					  id="request-update-receipt-example-http"
					>
					  <pre><code class="hljs http">POST /api/Receipts/edit/2 HTTP/1.1
  Host: informatikamedisuph.com
  Accept: application/json
  
  {
	  "type": "Outpatient",
	  "patient_name": "Forrest Bryant",
	  "doctor_name": "Doctor Strange",
	  "room_cost": 1,
	  "service_cost": 1,
	  "medicine_cost": 1,
	  "consumption_cost": 1,
	  "lab_cost": 1,
	  "radiology_cost":1,
	  "total_cost": 10000
  }</code></pre>
					</div>
				  </div>
				</div>
  
				<hr />
			  </div>
  
			  <div class="request">
				<h3 id="request-delete-receipt">
				  <b class="text-success">GET</b> - Delete Receipt
				  <a href="#request-delete-receipt"
					><i class="glyphicon glyphicon-link"></i
				  ></a>
				</h3>
  
				
                <div><p>Delete Receipt Data using API Service</p></div>
  
				<div>
				  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active mr-3" style="margin-left: -20px">
                      <a href="#request-delete-receipt-example-curl" data-toggle="tab"
                        ><b style="color: #14a1ff !important">Curl</b></a
                      >
                    </li>
                    <li role="presentation">
                      <a href="#request-delete-receipt-example-http" data-toggle="tab"
                        ><b style="color: #14a1ff !important">HTTP</b></a
                      >
                    </li>
                  </ul>
				  <div class="tab-content">
					<div
					  class="tab-pane active"
					  id="request-delete-receipt-example-curl"
					>
					  <pre><code class="hljs curl">curl -X GET "http://informatikamedisuph.com/api/Receipts/delete/15"</code></pre>
					</div>
					<div
					  class="tab-pane"
					  id="request-delete-receipt-example-http"
					>
					  <pre><code class="hljs http">GET /api/Receipts/delete/15 HTTP/1.1
  Host: informatikamedisuph.com</code></pre>
					</div>
				  </div>
				</div>
            </section>
          </article>
          <!--//docs-article-->

			    
		    </div> 
	    </div>
    </div><!--//docs-wrapper-->
    
   
       
    <!-- Javascript -->          
    <script src="{{ url('/apicss/assets/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/apicss/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ url('/apicss/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  
    
    
    <!-- Page Specific JS -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
    <script src="{{ url('/apicss/assets/js/highlight-custom.js') }}"></script> 
    <script src="{{ url('/apicss/assets/plugins/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ url('/apicss/assets/plugins/lightbox/dist/ekko-lightbox.min.js') }}"></script> 
    <script src="{{ url('/apicss/assets/js/docs.js') }}"></script> 
    <script> hljs.initHighlightOnLoad();</script>

</body>
</html> 

