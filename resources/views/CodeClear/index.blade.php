



@include('layouts.head')

   <!--main section-->
   <main class="container my-5" >

    <!--paste details-->
    <section>

      <div class="row justify-content-evenly" >

        <div class="col-12 col-md-7 p-3 rounded shadow" style="background-color: white;" >
          <!--title-->
            <div class="form-group row px-2 px-md-5 my-4">
              <label for="titleName" class="col-4 pt-3 h5" style="color: #2d4050;">Title</label>
              <input class="col-8 rounded border-0 shadow p-2 m-2 m-md-0 mx-auto" type="text" class="form-control" id="titleName" placeholder="Enter title name">
            </div>
            <!--new folder-->
            <div class="form-group row px-2 px-md-5 my-4">
              <label for="titleName" class="col-4 pt-3 h5" style="color: #2d4050;">Folder</label>
              <input class="col-6 rounded border-0 shadow m-md-0 mx-auto" type="text" class="form-control" id="titleName" placeholder="Enter folder name">
              <button class="col-2 rounded  text-light border-0" style="background-color:#4CAF50 ;">New</button>
            </div>
            <!--access-->
            <div class="form-group row justify-content-center my-4 px-2 px-md-5">
              <label for="comment" class="col-4 h5 mt-1" style="color: #2d4050;">Access</label>
              <div class="col-sm-8 fs-6">
                <input type="radio" id="Public" value="Public">
                <label for="Public" class="py-2 pe-4">Public</label>
                <input type="radio" id="Private" value="Private">
                <label for="Private" class="py-2 pe-3">Private</label>
                <input type="radio" id="Protected" value="Protected">
                <label for="Protected" class="py-2 pe-3">Protected</label>
              </div> 
            </div>
            <!--expiry-->
            <div class="row justify-content-between px-2 px-md-5 my-4">
              <label class="col-4 h5">Expires</label>
  
              <div class="col-8">
                <select class="form-select">
                  <option selected>After read</option>
                  <option>After 1 day</option>
                  <option>After 7 days</option>
                  <option>After 30 days</option>
                  <option>Never</option>
                </select>
              </div>
            </div>                
            <!--format-->
            <div class="row justify-content-center form-group px-2 px-md-5 my-4" >
              <label for="comment" class="col-4 h5" style="color: #2d4050;">Format</label>
              <div class="col-8">
                <select class="form-select">
                  <option selected>Code</option>
                  <option>Text</option>
                  <option>Raw</option>
                  <option>Image</option>
                  <option>Video</option>
                </select>
              </div>
            </div>

        </div>

        <!--recent-->
        <div class="col-12 col-md-4 rounded shadow px-4 px-md-5 py-5 py-md-4" style="background-color: white;">
          <h4 class="fw-bold">Latest Post</h4>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Williams</p>
                <p class="m-0">Navbar in Bootstrap</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">HTML</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 68 views</span> | <span class="text-danger">Expires Never</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Richard Park</p>
                <p class="m-0">JAVAX Swings</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">JAVA</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 26 views</span> | <span class="text-secondary">Expired</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Selena Holmes</p>
                <p class="m-0">Node in LinkedList</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">C++</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 130 views</span> | <span class="text-danger">Expires after 30 days</span> 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--section 2-->
    <section class="mt-4">
      <div class="row justify-content-evenly">
        <div class="col-12 col-md-7 rounded shadow p-3" style="height: 85vh;background-color: white;">
          <textarea name="enter code" id="" placeholder="Enter your code here..." class="mt-4 border-0 rounded shadow p-3 mx-4 d-block mx-auto" style="resize: none; background-color: #f7f7f7; height: 85%; width: 96%;"></textarea> 
          <button class="rounded bg-primary border-0 text-light p-2 px-4 text-center d-block mx-auto my-4">Create Paste
            <svg class="px-0 mb-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard2-fill" viewBox="0 0 16 16">
              <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
              <path d="M3.5 1h.585A1.498 1.498 0 0 0 4 1.5V2a1.5 1.5 0 0 0 1.5 1.5h5A1.5 1.5 0 0 0 12 2v-.5c0-.175-.03-.344-.085-.5h.585A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1Z"/>
            </svg>
          </button>
        </div>

        <!--popular-->
        <div class="col-12 col-md-4 rounded px-4 px-md-5 py-5 py-md-4 shadow" style="background-color: white;">
          <h4 class="fw-bold">Latest Post 
            <a href="{{route('recent')}}">recent posts</a>
          </h4>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Williams</p>
                <p class="m-0">Navbar in Bootstrap</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">HTML</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 68 views</span> | <span class="text-danger">Expires Never</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Richard Park</p>
                <p class="m-0">JAVAX Swings</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">JAVA</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 26 views</span> | <span class="text-secondary">Expired</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Selena Holmes</p>
                <p class="m-0">Node in LinkedList</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">C++</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 130 views</span> | <span class="text-danger">Expires after 30 days</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Mustafa Ali</p>
                <p class="m-0">Trees and graphs</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">C++</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 305 views</span> | <span class="text-danger">Expires after 7 days</span> 
              </p>
            </div>
          </div>
          <div class="mt-4">
            <div class="row justify-content-center">
              <div class="col-2">
                <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Images.png" width="50px" height="50px" alt="">
              </div>
              <div class="col-10">
                <p class="m-0 fw-bold">Radhika</p>
                <p class="m-0">Node in LinkedList</p>
              </div>
            </div>
            <div>
              <p class="my-1 ps-2" style="font-size: 14px;"> <span class="text-info fw-bold">C</span> | <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg> 30 views</span> | <span class="text-danger">Expires after read</span> 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

   </main>
  @include('layouts.footer')