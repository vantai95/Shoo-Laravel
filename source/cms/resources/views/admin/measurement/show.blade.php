<div class="general-info">
    <div class="left-table">
        <h4>General Info</h4>
        <table class="table">
            <tr>
                <th class="table-heading">Race</th>
                <th class="table-heading">Gender</th>
                <th class="table-heading">Date Of Birth</th>
            </tr>
            <tr>
                <td class="table-data">{{ $measurement->race }}</td>
                <td class="table-data">{{ $measurement->gender }}</td>
                <td class="table-data">{{ $measurement->date_of_birth }}</td>
            </tr>
        </table>
    </div>
    <div class="right-table">
        <h4>BMI info</h4>
        <table class="table">
            <tr>
                <th class="table-heading">Height ({{ $measurement->height_unit }})</th>
                <th class="table-heading">Weight ({{ $measurement->weight_unit }})</th>
            </tr>
            <tr>
                <td class="table-data">{{ $measurement->height }}</td>
                <td class="table-data">{{ $measurement->weight }}</td>
            </tr>
        </table>
    </div>
</div>
<br/>
<br/>
<h4>Feet info ({{ $measurement->code }})</h4>

<table class="table">
    <tr>
        <th style="width: 40%;">Description</th>
        <th>Left</th>
        <th>Right</th>
    </tr>
    <tr>
        <td>Foot length (mm)</td>
        <td>{{ $measurement->left_foot_length }}</td>
        <td>{{ $measurement->right_foot_length }}</td>
    </tr>
    <tr>
        <td>Toes Girth (mm)</td>
        <td>{{ $measurement->left_toes_girth }}</td>
        <td>{{ $measurement->right_toes_girth }}</td>
    </tr>
    <tr>
        <td>Ball Girth (mm)</td>
        <td>{{ $measurement->left_ball_girth }}</td>
        <td>{{ $measurement->right_ball_girth }}</td>
    </tr>
    <tr>
        <td>Ball Width (mm)</td>
        <td>{{ $measurement->left_ball_width }}</td>
        <td>{{ $measurement->right_ball_width }}</td>
    </tr>
    <tr>
        <td>Instep Height (mm)</td>
        <td>{{ $measurement->left_instep_height }}</td>
        <td>{{ $measurement->right_instep_height }}</td>
    </tr>
</table>

<h4>Measurement Images</h4>

<table class="table">
    <tr>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo1.jpg' }}"/></td>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo2.jpg' }}"/></td>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo3.jpg' }}"/></td>
    </tr>
    <tr>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo4.jpg' }}"/></td>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo5.jpg' }}"/></td>
        <td><img style="width: 100%" src="{{ $url . '/' . $measurement->code . '/' . 'photo6.jpg' }}"/></td>
    </tr>
</table>

<a class="btn btn-sm btn-info pull-right" style="margin-bottom: 20px; margin-right: 10px" href="{{ url
('/admin/measurements/' .
$measurement->code .
            '/download-to-zip')
             }}">
    <i class="fa fa-undo"></i> Download
</a>