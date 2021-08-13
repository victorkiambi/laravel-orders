<h4>Create New Order</h4>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" action="{{ url("user/create/order") }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="col-md-6">
                        <label for="select-pages" class="form-label">Service</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            @foreach($services as $service)
                                <option value="{{ $service->label }}" >{{ $service->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="select-pages" class="form-label">Pages</label>
                        <select class="form-select" aria-label="Default select example" name="pages">
                            <option selected>1 Page 275 words</option>

                            <option value="2 Pages 550 words">2 Pages 550 words</option>
                            <option value="3 Pages 825 words">3 Pages 825 words</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Level</label>
                        <select class="form-select" aria-label="Default select example" name="level">
                            @foreach($levels as $level)
                                <option value="{{ $level->level }}" >{{ $level->level}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline" required >

                    </div>
                    <div class="col-6">
                        <label for="formFile" class="form-label">Upload File</label>
                        <input class="form-control" type="file" name="file" >
                    </div>
                    <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Instructions</label>
                        <textarea class="form-control" name="instructions" rows="3"></textarea>

                    </div>

                    {{--                                <div class="col-md-2">--}}
                    {{--                                    <label for="inputZip" class="form-label">Zip</label>--}}
                    {{--                                    <input type="text" class="form-control" id="inputZip">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-12">--}}
                    {{--                                    <div class="form-check">--}}
                    {{--                                        <input class="form-check-input" type="checkbox" id="gridCheck">--}}
                    {{--                                        <label class="form-check-label" for="gridCheck">--}}
                    {{--                                            Check me out--}}
                    {{--                                        </label>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger">Submit Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
