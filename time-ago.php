<?php
function time_ago($startTime, $format = false)
{
    $arr_res = [
        'y'  => 0,
        'm'  => 0,
        'd'  => 0,
        'h'  => 0,
        'min'=> 0,
        's'  => 0,
        ];
    $amount_of_elapsed_time = '';
    $startTime = new Datetime($startTime);
    $endTime = new DateTime();
    $diff = $endTime->diff($startTime);
    if ($diff->format('%y') !== '0') {
            if ($format !== true) 
                $y = true;
            if ($diff->format('%y') === '1') {
                $amount_of_elapsed_time = $diff->format('%y') . ' year ago ';
                $arr_res['y'] = $diff->format('%y') . ' year';
            } else {
                $amount_of_elapsed_time = $diff->format('%y') . ' years ago ';
                $arr_res['y'] = $diff->format('%y') . ' years';
              }
        }
        
    if ($diff->format('%m') !== '0') {
        if ($amount_of_elapsed_time != '' && $format !== true) {
            $amount_of_elapsed_time = str_replace('ago', 'and', $amount_of_elapsed_time);
            $m = true;
            if ($diff->format('%m') === '1') {
                $amount_of_elapsed_time .= $diff->format('%m') . ' month ago';
            } else {
                $amount_of_elapsed_time .= $diff->format('%m') . ' months ago';
              }
        } else {
            if ($format !== true)
                $m = true;
            if ($diff->format('%m') === '1') {
                $amount_of_elapsed_time .= $diff->format('%m') . ' month ago';
                $arr_res['m'] = $diff->format('%m') . ' month';
            } else {
                $amount_of_elapsed_time .= $diff->format('%m') . ' months ago';
                $arr_res['m'] = $diff->format('%m') . ' months';
              }
            }
        }

        if ($y == false && $m == false) {
            if ($diff->format('%d') !== '0') {
                if ($diff->format('%d') === '1') {
                    $amount_of_elapsed_time = $diff->format('%d') . ' day ago';
                    $arr_res['d'] = $diff->format('%d') . ' day';
                } else {
                    $amount_of_elapsed_time = $diff->format('%d') . ' days ago';
                    $arr_res['d'] = $diff->format('%d') . ' days';
                }
                    if ($format !== true) 
                        $stop = true;
                }
                if ($diff->format('%h') !== '0' && $stop !== true) {
                    if ($diff->format('%h') === '1') {
                        $amount_of_elapsed_time = $diff->format('%h') . ' hour ago' ;
                        $arr_res['h'] = $diff->format('%h') . ' hour' ;
                    } else {
                        $amount_of_elapsed_time = $diff->format('%h') . ' hours ago';
                        $arr_res['h'] = $diff->format('%h') . ' hours';
                    }
                    if ($format !== true) 
                        $stop = true;
                }
                if ($diff->format('%i') !== '0' && $stop !== true) {
                    if ($diff->format('%i') === '1') {
                        $amount_of_elapsed_time = $diff->format('%i') . ' minute ago';
                        $arr_res['min'] = $diff->format('%i') . ' minute';
                    } else {
                        $amount_of_elapsed_time = $diff->format('%i') . ' minutes ago';
                        $arr_res['min'] = $diff->format('%i') . ' minutes';
                    }
                    if ($format !== true)
                        $stop = true;
                }
                if ($diff->format('%s') !== '0' && $stop !== true) {
                    if ($diff->format('%s') === '1') {
                        $amount_of_elapsed_time = $diff->format('%s') . ' second ago' ;
                        $arr_res['s'] = $diff->format('%s') . ' second' ;
                    } else {
                        $amount_of_elapsed_time = $diff->format('%s') . ' seconds ago' ;
                        $arr_res['s'] = $diff->format('%s') . ' seconds' ;
                    }
                }
                $stop = true;
        }
        if ($format === true)
            return $arr_res;
        return $amount_of_elapsed_time;
} 
?>
