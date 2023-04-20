@include('layouts.head')

<main>
  <!--Section 1-->
  <section class="container-fluid" style="background-color: rgb(228, 239, 239);">
    <section class="container">
     
        <h1><span class="badge  mt-2" style="background-color: #496708;">Recent Pastes</span></h1>
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Posted By</th>
                <th scope="col">Title</th>
                <th scope="col">Updated</th>
                <th scope="col">Format</th>
                <th scope="col">Views</th>
                <th scope="col">Expires In</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Rames</td>
                <td>HTML</td>
                <td>1 day ago</td>
                <td>Code</td>
                <td>150 views</td>
                <td>5 days</td>
              </tr>
              <tr>
                <td>Manohar</td>
                <td>JAVA</td>
                <td>5 days ago</td>
                <td>Code</td>
                <td>98 views</td>
                <td>15 days</td>
              </tr>
              <tr>
                <td>Mahesh</td>
                <td>project 1</td>
                <td>15 days ago</td>
                <td>Vedio</td>
                <td>30 views</td>
                <td>7 days</td>

              </tr>
              <tr>
                <td>Venugopal</td>
                <td>C++</td>
                <td>7 days ago</td>
                <td>Code</td>
                <td>205 views</td>
                <td>45 days</td>

              </tr>
              <tr>
                <td>Kamal</td>
                <td>C</td>
                <td>9 days ago</td>
                <td>Code</td>
                <td>170 views</td>
                <td>22 days</td>

              </tr>
              <tr>
                <td>Rajesh</td>
                <td>project 2</td>
                <td>9 days ago</td>
                <td>Image</td>
                <td>15 views</td>
                <td> 60 days</td>
              </tr>
              <tr>
                <td>Balu</td>
                <td>CSS</td>
                <td>9 days ago</td>
                <td>Code</td>
                <td>23 views</td>
                <td>18 days</td>
              </tr>
              <tr>
                <td>Shyamu</td>
                <td>JAVA</td>
                <td>9 days ago</td>
                <td>Code</td>
                <td>210 views</td>
                <td>65 days</td>
              </tr>
              <tr>
                <td>Manasa</td>
                <td>HTML</td>
                <td>9 days ago</td>
                <td>Code</td>
                <td>25 views</td>
                <td>21 days</td>
              </tr>
              <tr>
                <td>Swapna</td>
                <td>project 3</td>
                <td>9 days ago</td>
                <td>Raw</td>
                <td>34 views</td>
                <td>25 days</td>
              </tr>
            </tbody>
          </table>
        

    </section>
  </section>
</main>

@include('layouts.footer')