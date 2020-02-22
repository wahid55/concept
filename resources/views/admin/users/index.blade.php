@extends('admin.index')

@section('title', 'All Users')


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row table_filter">
                <div class="col-md-6">
                    <form class="form-inline action_form">
                        <select class="form-control form-control-sm mb-2 mr-sm-2" name="action" title="Bulk Actions" data-width="150px">
                            <option value="soft">{{ __('Move to trash') }}</option>
                            <option value="hard">{{ __('Permanently Delete') }}</option>
                        </select>
                        <button type="submit" class="btn btn-xs btn-primary mb-2">{{ __('Apply') }}</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form class="form-inline float-md-right filter_form">
                        <select class="form-control form-control-sm mb-2 mr-sm-2" name="date" title="All Dates" data-width="120px">
                            <option>January, 2020</option>
                            <option>February, 2020</option>
                        </select>
                        <select class="form-control form-control-sm mb-2 mr-sm-2" name="category" title="All Categories" data-width="150px">
                            <option>Category 1</option>
                            <option>Uncategorized</option>
                        </select>
                        <button type="submit" class="btn btn-xs btn-primary mb-2">{{ __('Filter') }}</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="GET" class="result_form">
                    <input type="hidden" name="action">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkall"><span class="custom-control-label"></span>
                                    </label>
                                </th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="item" value="1"><span class="custom-control-label"></span>
                                    </label>
                                </td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <ul class="pagination mt-3 mb-0">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link " href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>

            </div>
        </div>
    </div>
@endsection