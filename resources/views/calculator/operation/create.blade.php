 @include('layouts.head')
 <div class="border border-secondary p-4">
     <form action="{{ route('operation.store') }}" method="get">
         <label>Enter A:</label>
         <input type="text" name="a" value="" class="form-control w-100 mb-4" />
         <label>Enter B:</label>
         <input type="text" name="b" value="" class="form-control w-100 mb-4" />
         <label> Choose the Operation</label>
         <select class="form-control mb-4" name="operation">
             <option value="add">Addition</option>
             <option value="subtract">Subtraction</option>
             <option value="multiply">Multiplication</option>
         </select>
         <button type="submit" class="btn btn-primary">Perform Operation</button>
     </form>
 </div>
 @include('layouts.footer')