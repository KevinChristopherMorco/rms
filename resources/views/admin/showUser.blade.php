@extends('layouts.app')
@section('title', 'User Management')
@section('content')


<section class="admin-container">
    <div class="flex h-full">

        <div class="admin-sidebar-container">
            @include('partials.sidebar')
        </div>
        <div class="w-full">
            @include('partials.navAdmin')
            <div class="flex justify-center">
                <div class="table-container p-6">
                    <p class="text-lg font-bold pb-4">User Details</p>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Library Card Number</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->middle_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->card_number }}</td>
                                <td class="action-btn user"><i class="fa-regular fa-eye px-2"
                                        data-user-id="{{ $user->id }}"></i>
                                    <i class="fa-regular fa-pen-to-square px-2"></i>
                                    <i class="fa-solid fa-user-slash px-2"></i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modal.admin.userDetail')


    <script>
        let sidebarContainer = document.querySelector('.admin-sidebar-container')
            let sidebar = document.querySelector('.admin-sidebar')
            let sidebarHeading = document.querySelectorAll('.admin-sidebar-heading')
            let sidebarText = document.querySelectorAll('.admin-sidebar span')
            let sidebarBtn = document.querySelector('.sidebar-btn')
            sidebarBtn.addEventListener('click', (e) => {
                sidebarContainer.classList.toggle('admin-sidebar-container--toggle')

                sidebarHeading.forEach((sidebarHeadingEl) => {
                    sidebarHeadingEl.classList.toggle('hidden')
                })
                sidebarText.forEach((sidebarTextEl) => {
                    sidebarTextEl.classList.toggle('hidden')
                })

            })
    </script>

    <script>
        const modal = document.querySelectorAll('.main-modal')
            const modalClose = document.querySelectorAll('.modal-close')
            const modalContent = document.querySelectorAll('.modal-content-container');
            const loadingIndicators = document.querySelectorAll('.loading-indicator');
            const modalText = document.querySelectorAll('.modal-text');
            const navbar = document.querySelectorAll('.navbar')
            const viewUser = document.querySelectorAll('.action-btn.user .fa-eye')
            const editUser = document.querySelectorAll('.action-btn.user .fa-pen-to-square')
            const archiveUser = document.querySelectorAll('.action-btn.user .fa-user-slash')


            modal.forEach((modalEl) => {
                modalEl.classList.add('hidden')
            })

            modalClose.forEach((modalCloseEl) => {
                modalCloseEl.addEventListener('click', (e) => {
                    modal.forEach((modalEl) => {
                        modalEl.classList.add('hidden')
                    })
                })
            })

            viewUser.forEach((viewUserEl) => {
                viewUserEl.addEventListener('click', (e) => {
                    modal.forEach((modalEl) => {
                        modalEl.classList.remove('hidden')
                    })

                    const userId = viewUserEl.getAttribute('data-user-id')
                    loadingIndicators.forEach((loadingIndicatorsEl) => {
                        loadingIndicatorsEl.style.display = 'block'
                    })
                    modalText.forEach((modalTextEl) => {
                        modalTextEl.style.display = 'none'
                    })
                    axios.get(`/api/users/${userId}`)
                        .then(function(response) {
                            const userData = response.data;

                        document.getElementById('firstname-row').innerHTML = userData.first_name
                        document.getElementById('middlename-row').innerHTML = userData.middle_name
                        document.getElementById('lastname-row').innerHTML = userData.last_name
                        document.getElementById('birthdate-row').innerHTML = userData.birthdate
                        document.getElementById('gender-row').innerHTML = userData.gender
                        document.getElementById('card-row').innerHTML = userData.card_number
                        document.getElementById('email-row').innerHTML = userData.email
                        document.getElementById('house-row').innerHTML = userData.house_no
                        document.getElementById('barangay-row').innerHTML = userData.barangay
                        document.getElementById('citymunicipality-row').innerHTML = userData.city_municipality
                        document.getElementById('province-row').innerHTML = userData.province

                            loadingIndicators.forEach((loadingIndicatorsEl) => {
                                loadingIndicatorsEl.style.display = 'none'
                            })
                            modalText.forEach((modalTextEl) => {
                                modalTextEl.style.display = 'block'
                            })

                        })
                        .catch(function(error) {
                            console.log(error);

                        })

                })
            })
    </script>

    <script>
        editUser.forEach((editUserEl) => {
                editUserEl.addEventListener('click', (e) => {
                    Swal.fire({
                        icon: 'question',
                        title: 'Modify User Information',
                        text: 'Are you sure you want to proceed?!',
                    })
                })
            })
    </script>

    <script>
        archiveUser.forEach((archiveUserEl) => {
                archiveUserEl.addEventListener('click', (e) => {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Archive User Account',
                        text: 'Are you sure you want to proceed?!',
                    })
                })
            })
    </script>

</section>
@endsection