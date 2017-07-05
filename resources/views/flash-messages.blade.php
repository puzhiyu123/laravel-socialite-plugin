<?php
/**
 * Created by PhpStorm.
 * User: zhiyupu
 * Date: 2017-07-05
 * Time: 3:37 PM
 */

@if(session()->has('flash-message'))
    <div class="alert alert-danger text-center" role="alert">
        {{ session()->get('flash-message') }}
    </div>
@endif
