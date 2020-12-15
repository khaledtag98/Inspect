@section('modal')
    <div class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
        <div class="absolute w-full h-full bg-white modal-overlay opacity-95"></div>

        <div class="fixed z-50 w-full h-full overflow-y-auto modal-container ">

            <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-black cursor-pointer">
                <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>

            <!-- Add margin if you want to see grey behind the modal-->
            <div class="container h-auto p-4 mx-auto text-left bg-fixed modal-content">

                <div class='flex w-full my-16 modal-close'>
                    <div class='flex flex-wrap w-2/3 overflow-y-auto'>
                        <div class='w-full mx-2 my-2'>
                            <img  src='http://localhost/our-beautiful-project/resources/img/house-1.jpg'>
                        </div>
                        <div class='w-1/3 mx-2 my-2'>
                            <img  src='http://localhost/our-beautiful-project/resources/img/house-2.jpg'>
                        </div>
                        <div class='w-1/3 mx-2 my-2'>
                            <img  src='http://localhost/our-beautiful-project/resources/img/house-3.jpg'>
                        </div>
                    </div>
                    <div class='w-1/3 my-5 text-black'>
                        <h1 class='text-3xl font-bold'>The Catalyzer - $250,000</h1>
                        <div class="category">
                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Chalet</h2>
                        </div>
                        <p>10753 Basie Way, Rancho Cordova, CA 95670</p>
                        <p>Tel: +2035000000 </p><br>
                        <h1 class='text-2xl font-bold'>Description</h1>
                        <p>Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                            Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                            Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                        </p>
                        <button href="#" class='px-12 py-3 my-10 bg-button1'>Book a tour</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
