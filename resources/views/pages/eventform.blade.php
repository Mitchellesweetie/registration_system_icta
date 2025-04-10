<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.1.1
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2024 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">

    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="57x57" href={{asset("assets/favicon/apple-icon-57x57.png")}}>
    <link rel="apple-touch-icon" sizes="60x60" href={{asset("assets/favicon/apple-icon-60x60.png")}}>
    <link rel="apple-touch-icon" sizes="72x72" href={{asset("assets/favicon/apple-icon-72x72.png")}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("assets/favicon/apple-icon-76x76.png")}}>
    <link rel="apple-touch-icon" sizes="114x114" href={{asset("assets/favicon/apple-icon-114x114.png")}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{asset("assets/favicon/apple-icon-120x120.png")}}>
    <link rel="apple-touch-icon" sizes="144x144" href={{asset("assets/favicon/apple-icon-144x144.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{asset("assets/favicon/apple-icon-152x152.png")}}>
    <link rel="apple-touch-icon" sizes="180x180" href={{asset("assets/favicon/apple-icon-180x180.png")}}>
    <link rel="icon" type="image/png" sizes="192x192" href={{asset("assets/favicon/android-icon-192x192.png")}}>
    <link rel="icon" type="image/png" sizes="32x32" href={{asset("assets/favicon/favicon-32x32.png")}}>
    <link rel="icon" type="image/png" sizes="96x96" href={{asset("assets/favicon/favicon-96x96.png")}}>
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("assets/favicon/favicon-16x16.png")}}>
    <link rel="manifest" href={{asset("assets/favicon/manifest.json")}}>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href={{asset("css/vendors/simplebar.css")}}>
    <!-- Main styles for this application-->
    <link href={{asset("/css/style.css" )}} rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href={{asset("/css/examples.css" )}}rel="stylesheet">
    <script src={{asset("/js/config.js" )}}></script>
    <script src={{asset("/js/color-modes.js" )}}></script>
    <link href="/node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
    <style>
        /* Ensure the down arrow is white by default */
        .sidebar-brand-full{
          font-family: "Dancing Script", cursive;
          font-optical-sizing: auto;
          font-weight: 30px;
          font-style: normal;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 50px;
        }

        .experience-entry {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            background-color: #fff;
        }

        .btn-add, .btn-save, .btn-remove, .btn-next, .btn-add-role {
            font-weight: bold;
        }

        .saved-entries {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }

        .saved-entry {
            padding: 10px;
            margin-bottom: 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .roles-container {
            margin-top: 15px;
        }

    </style>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <h1 class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">Events Builder
          </h1>
        </div>
      </div>

      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="/" style="text-decoration: none;">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
            Dashboard</a></li>
         <li class="nav-title">Super Admin</li>

      
       
        <div class="accordion" id="accordionExample">
          <div class="accordion-item" style="border: none;">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/></svg> Admins
             </button>
           </h2>
           <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
             <div class="accordion-body">
               <ul class="navbar-nav">
                 <li class="nav-item">
                   <a class="nav-link " aria-current="page" href="/add_users"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>Users</a>

                 </li>
               </ul>

           </div>
           </div>
         </div>
       
        <div class="accordion-item" style="border: none;">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXI" aria-expanded="false" aria-controls="collapseXI">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
                         Events
            
            </button>
          </h2>
          <div id="collapseXI" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{url('events')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                    Create Events</a>
                </li>
              </ul>
          </div>
          </div>
        </div>
        
      
        
        <div class="accordion-item" style="border: none;">
          <h2 class="accordion-header">
              <a href="{{ route ('reports')}}" style="text-decoration: none" class="accordion-button collapsed nav-link"  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" >
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h240l80 80h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Z"/></svg>
              Reports
            </a>
          </h2>

         
       </div>
           
        
       
       </div>
        <li class="nav-divider"></li>
        <li class="nav-title"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
          Settings</li>
        <a class="nav" href="/login" style="text-decoration: none;"> <li class="nav-title"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
          Logout</li></a>
       
            
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="header-nav d-none d-lg-flex">
         
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
            </li>
            <li class="nav-item dropdown">
              
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
               
              
              
              </ul>
            </li>
          
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-md">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>Profile</title>
              <path d="M19.294 16.109l-3.414-2.219 1.287-2.359c0.288-0.519 0.457-1.137 0.458-1.796v-3.735c0-2.9-2.351-5.25-5.25-5.25s-5.25 2.351-5.25 5.25v0 3.735c0.001 0.658 0.17 1.277 0.468 1.815l-0.010-0.019 1.287 2.359-3.414 2.219c-1.033 0.676-1.706 1.828-1.706 3.137 0 0.002 0 0.005 0 0.007v-0 3.997h17.25v-3.997c0-0.002 0-0.005 0-0.007 0-1.309-0.673-2.461-1.692-3.128l-0.014-0.009zM19.5 21.75h-14.25v-2.497c0-0.001 0-0.003 0-0.004 0-0.785 0.404-1.477 1.015-1.877l0.009-0.005 4.578-2.976-1.952-3.578c-0.173-0.311-0.274-0.682-0.275-1.077v-3.735c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75v0 3.735c-0 0.395-0.102 0.766-0.281 1.089l0.006-0.012-1.952 3.579 4.578 2.976c0.62 0.406 1.024 1.097 1.024 1.882 0 0.001 0 0.003 0 0.004v-0z"></path>
              </svg></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div><a class="dropdown-item" href="#">
                
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="container">

      

        <h2 class="text-center">Event Calendar</h2>
        <div id="experienceForms"></div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-success btn-add" onclick="addExperienceForm()">+ Add Event</button>
            {{-- <button class="btn btn-purple btn-next" onclick="proceedToNext()" id="nextButton" disabled>Next</button> --}}
        </div>
        <div class="saved-entries" id="savedEntries">
            <h3>Saved Entries</h3>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS, and Bootstrap Datepicker JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        let experienceEntries = [];
        let formCount = 0;

        function addExperienceForm() {
            formCount++;
            const formId = `Event-${formCount}`;

            const formHtml = `
                <div class="experience-entry" id="${formId}">
                    <h5>Event Entry ${formCount}</h5>
                    <div class="form-group">
                        <label for="company-${formId}">Events</label>
                        <input type="text" class="form-control" id="company-${formId}" required>
                    </div>
                    <div class="form-group">
                        <label for="position-${formId}">Event Description</label>
                        <textarea type="text" class="form-control" id="position-${formId}" required></textarea>
                    </div>
                  
                    <div class="roles-container" id="roles-${formId}" style="padding:10px;">
                        <div class="form-group role-entry">
                            <label for="role-${formId}-1">Question 1</label>
                            <input type="text" class="form-control" id="role-${formId}-1" placeholder="Enter a question">
                        </div>
                    </div>
                    <button class="btn btn-info btn-add-role" onclick="addRole('${formId}')" style="padding:10px;">+ Add Questions</button>
                    <button class="btn btn-primary btn-save" id="save-btn-${formId}">Save Entry</button>
                    <button class="btn btn-danger btn-remove" onclick="removeEntry('${formId}')">Remove Entry</button>
                </div>
            `;

            document.getElementById('experienceForms').insertAdjacentHTML('beforeend', formHtml);

           
            // Attach the event listener for the save button
            document.getElementById(`save-btn-${formId}`).addEventListener('click', () => saveEntry(formId));
        }

     

        function addRole(formId) {
            const rolesContainer = document.getElementById(`roles-${formId}`);
            const roleCount = rolesContainer.children.length + 1;
            
            const roleHtml = `
                <div class="form-group role-entry">
                    <label for="role-${formId}-${roleCount}">Question ${roleCount}</label>
                    <input type="text" class="form-control" id="role-${formId}-${roleCount}" placeholder="Enter a question">
                </div>
            `;
            rolesContainer.insertAdjacentHTML('beforeend', roleHtml);
        }

        function saveEntry(formId) {
    // Collect form data for the current entry
    const formData = {
        event_name: document.getElementById(`company-${formId}`).value,
        event_description: document.getElementById(`position-${formId}`).value,
        questions: [] 
    };

    const rolesContainer = document.getElementById(`roles-${formId}`);
    const roleInputs = rolesContainer.getElementsByTagName('input');
    for (let i = 0; i < roleInputs.length; i++) {
        if (roleInputs[i].value.trim()) {
            formData.questions.push(roleInputs[i].value.trim()); 
        }
    }

    console.log("Form Data:", formData);

    if (!validateForm(formData)) {
        alert('Please fill in all required fields');
        return;
    }

    fetch('http://127.0.0.1:8000/events', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          },
        body: JSON.stringify(formData)
    })
    .then(response => {
    if (!response.ok) {
        console.log('Status:', response.status);
        throw new Error('Network response was not ok');
    }
    return response.json();
})
    .then(data => {
        if (data.success) {
            displaySavedEntry(formData);
            // alert('Data saved successfully.');
        //     const alertBox = document.getElementById('alert');
        // alertBox.style.display = 'flex'; // Show the alert

        // // Automatically hide the alert after 3 seconds
        // setTimeout(() => {
        //     alertBox.style.display = 'none';
        // }, 3000);
        Swal.fire({
            icon: 'success',
            title: 'Data saved successfully!',
            showConfirmButton: false,
            timer: 1500
        });


            document.getElementById(formId).remove();

            // document.getElementById('nextButton').disabled = false;
        } else {
            console.error('Error saving event details:', data.message);
            alert('Error saving event details.');
        }
    })
    .catch(error => {
        console.log('Error saving event details:', error);
        // alert('An error occurred while saving your event details. Please try again.');
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "An error occurred while saving.Please try again.'",
});
    });
}

function validateForm(formData) {
    // Check if all required fields are filled
    if (!formData.event_name || !formData.event_description || formData.questions.length === 0) {
        return false; // If any of these fields are missing, return false
    }
    return true; // All validations passed
}

        function displaySavedEntry(entry) {
            const entryHtml = `
                <div class="saved-entry">
                    <strong>${entry.event_name}</strong><br>
                    Event Descriptions: ${entry.event_description}<br>
                    Questions: ${entry.questions.join(', ')}<br>
                </div>
              
            `;
                                  //  <a href="" class="btn btn-warning">Edit</a>

            document.getElementById('savedEntries').insertAdjacentHTML('beforeend', entryHtml);
        }

        function removeEntry(formId) {
            document.getElementById(formId).remove();
        }

        // function proceedToNext() {
        //     window.location.href = '/portfolio_view_references'; 
        //     alert('Experience history saved successfully! Proceeding to next section...');
        // }
    </script>
    
        
          

                
          
          </div>        


           


        
     
                    
             
        
          <div class="break"></div>

                                            <script type></script>
       
            
        
          
                    
           
        
                      
       
        </div> 
      </div>
    </div>
        <footer class="footer" style="position: fixed; bottom: 0; width: 100%; display: flex; justify-content: center; align-items: center; color: grey; background-color: #f8f9fa; padding: 10px 0;">
          {{-- <p style="margin: 0; color: grey;">xcapital&copy; 2024</p> --}}
      </footer>
      <script>
        
        function myFunction(){

        }


      </script>
    
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
    <script>
      const header = document.querySelector('header.header');
      
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
      
    </script>
    <script>
      function generateOrderedNumbers(){
        const row=document.querySelectorAll("tbody tr");
        row.forEach((rows,index)=>{
          rows.cells[0].innerText=index+1
        })
      }
      generateOrderedNumbers()


    </script>
    
  
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
    <script src="node_modules/@coreui/utils/dist/umd/index.js"></script>
    <script src="js/main.js"></script>
    <script> 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>