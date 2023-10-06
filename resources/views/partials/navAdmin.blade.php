<div class="w-full flex justify-center">
    <div class="flex justify-between items-center bg-white my-4 p-4" style="width: 95%; border-radius: 20px">
        <div class="flex justify-between items-center" style="width:10%">
            <i class="fa-solid fa-eye sidebar-btn hover:cursor-pointer"></i>
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="flex justify-around items-center" style="width:30%">
            <form action="/logout" method="POST">
                @csrf
                <button
                    role="alert"><i class="fa-solid fa-power-off text-red-400"></i></button>
            </form>
            <i class="fa-regular fa-bell"></i>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/002/002/403/small/man-with-beard-avatar-character-isolated-icon-free-vector.jpg"
                width="35px" height="35px" alt="">
        </div>
    </div>
</div>