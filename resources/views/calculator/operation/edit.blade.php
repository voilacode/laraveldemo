 @include('layouts.head')
 <div class="border border-secondary p-4">
     <h1> Edit Form</h1>
     <form action="{{ route('operation.update',$data['id']) }}" method="get">
         <label>Enter A:</label>
         <input type="text" name="a" value="{{ $data['a'] }}" class="form-control w-100 mb-4" />
         <label>Enter B:</label>
         <input type="text" name="b" value="{{ $data['b'] }}" class="form-control w-100 mb-4" />
         <label> Choose the Operation</label>
         <select class="form-control mb-4" name="operation">
             <option value="add" @if($data['opr']=='add' ) selected @endif>Addition</option>
             <option value="subtract" @if($data['opr']=='subtract' ) selected @endif>Subtraction</option>
             <option value="multiply" @if($data['opr']=='multiply' ) selected @endif>Multiplication</option>
         </select>
         <button type="submit" class="btn btn-primary">Edit Operation</button>
     </form>
 </div>
 @include('layouts.footer')