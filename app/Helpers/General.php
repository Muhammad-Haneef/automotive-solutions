<?php

use Illuminate\Support\Facades\DB;

// use App\NewsUpdate;
// use App\Property_type;

if (!function_exists('assets')) {
    function assets($key = '')
    {
        $output = '';
        $paths = [
            'css' => asset('assets/css') . '/',
            'js' => asset('assets/js') . '/',
            'img' => asset('assets/images') . '/',
            'svg' => asset('assets/svg/icon-sprite.svg') . '#',
        ];
        if (isset($paths[$key])) {
            $output = $paths[$key];
        }
        return $output;
    }
}

if (!function_exists('get_yes_no_options')) {
    function get_yes_no_options()
    {
        return collect([(object) ['id' => 0, 'title' => 'No'], (object) ['id' => 1, 'title' => 'Yes']]);
    }
}

if (!function_exists('getPagesList')) {
    function getPagesList()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'home'],
            (object) ['id' => '2', 'title' => 'category'],
            (object) ['id' => '3', 'title' => 'product']
        ]);
    }
}

if (!function_exists('getOfferTypes')) {
    function getOfferTypes()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'Products'],
            (object) ['id' => '2', 'title' => 'Brands'],
            (object) ['id' => '3', 'title' => 'Categories'],
            (object) ['id' => '4', 'title' => 'Collection'],
        ]);
    }
}

// PRODUCT RELATED - start
if (!function_exists('getAttributeInputTypes')) {
    function getAttributeInputTypes()
    {
        return collect([
            (object) ['id' => 'text', 'title' => 'Text Input'],
            (object) ['id' => 'number', 'title' => 'Number Input'],
            (object) ['id' => 'color', 'title' => 'Color Selection']
        ]);
    }
}
if (!function_exists('getProductTypes')) {
    function getProductTypes()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'physical'],
            (object) ['id' => '2', 'title' => 'digital'],
            (object) ['id' => '3', 'title' => 'subscription'],
            (object) ['id' => '4', 'title' => 'service'],
        ]);
    }
}
if (!function_exists('getWarrantyPeriodUnits')) {
    function getWarrantyPeriodUnits()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'none'],
            (object) ['id' => '2', 'title' => 'days'],
            (object) ['id' => '3', 'title' => 'months'],
            (object) ['id' => '4', 'title' => 'years'],
        ]);
    }
}
if (!function_exists('getWarrantyTypes')) {
    function getWarrantyTypes()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'store'],
            (object) ['id' => '2', 'title' => 'manufacturer']
        ]);
    }
}
if (!function_exists('getLicenseTypes')) {
    function getLicenseTypes()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'single-use'],
            (object) ['id' => '2', 'title' => 'subscription'],
            (object) ['id' => '3', 'title' => 'lifetime']
        ]);
    }
}
if (!function_exists('getProductStockStatuses')) {
    function getProductStockStatuses()
    {
        return collect([
            (object) ['id' => '1', 'title' => 'in_stock'],
            (object) ['id' => '2', 'title' => 'out_of_stock'],
            (object) ['id' => '3', 'title' => 'pre_order']
        ]);
    }
}
if (!function_exists('getShowVideosPerRowOptions')) {
    function getShowVideosPerRowOptions()
    {
        return collect([
            (object) ['id' => '2', 'title' => '2 Videos Per Row'],
            (object) ['id' => '3', 'title' => '3 Videos Per Row'],
            (object) ['id' => '4', 'title' => '4 Videos Per Row']
        ]);
    }
}
// PRODUCT RELATED - end

if (!function_exists('getBannerDisplayStyles')) {
    function getBannerDisplayStyles()
    {
        return collect([
            (object) ['id' => 'static', 'title' => 'Static'],
            (object) ['id' => 'slider', 'title' => 'Slider'],
        ]);
    }
}

/*
 * if (!function_exists('getImage')) {
 *     function getImage($url = null, $height = 50, $width = 50, $display = 1)
 *     {
 *         $url = asset($url ? 'storage/' . $url : 'assets/images/placeholder_120x120.jpg');
 *         if ($display)
 *             echo '<img class="img-fluid" src="' . htmlspecialchars($url) . '" height="' . intval($height) . '" width="' . intval($width) . '" />';
 *         else
 *             return '<img class="img-fluid" src="' . htmlspecialchars($url) . '" height="' . intval($height) . '" width="' . intval($width) . '" />';
 *     }
 * }
 */
if (!function_exists('getImage')) {
    function getImage($url = null, $height = 50, $width = 50, $alt = 'image', $display = 1)
    {
        $placeholder = asset('assets/images/placeholder_120x120.jpg');

        // Resolve image source
        if (!$url) {
            $src = $placeholder;
        } else {
            $path = storage_path('app/public/' . $url);

            $src = file_exists($path)
                ? asset('storage/' . $url)
                : $placeholder;
        }

        if ($display)
            echo '<img class="img-fluid" src="' . e($src) . '" height="' . intval($height) . '" width="' . intval($width) . '" alt="' . e($alt) . '">';
        else
            return '<img class="img-fluid" src="' . e($src) . '" height="' . intval($height) . '" width="' . intval($width) . '" alt="' . e($alt) . '">';
    }
}

if (!function_exists('imageTag')) {
    function imageTag($url = null, $height = 50, $width = 50, $alt = 'image')
    {
        return '<img src="' . e(imageUrl($url)) . '" height="' . intval($height) . '" width="' . intval($width) . '" alt="' . e($alt) . '" class="img-fluid">';
    }
}

if (!function_exists('getShippingCostTypes')) {
    function getShippingCostTypes($selected = 0)
    {
        $types = [
            [
                'id' => 1,
                'title' => 'flat',
            ],
            [
                'id' => 2,
                'title' => 'Weight Based',
            ],
            [
                'id' => 3,
                'title' => 'Distance Based',
            ],
            [
                'id' => 4,
                'title' => 'Free',
            ],
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getInquiriesStatus')) {
    function getInquiriesStatus()
    {
        $types = [
            [
                'id' => 1,
                'title' => 'Pending',
            ],
            [
                'id' => 2,
                'title' => 'In Progress',
            ],
            [
                'id' => 3,
                'title' => 'Resolved',
            ],
            [
                'id' => 4,
                'title' => 'Closed',
            ],
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getCallbackStatus')) {
    function getCallbackStatus()
    {
        $types = [
            [
                'id' => 1,
                'title' => 'Pending',
            ],
            [
                'id' => 2,
                'title' => 'In Progress',
            ],
            [
                'id' => 3,
                'title' => 'Resolved',
            ],
            [
                'id' => 4,
                'title' => 'Closed',
            ],
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getWalletStatus')) {
    function getWalletStatus()
    {
        $types = [
            [
                'id' => 1,
                'title' => 'Pending',
            ],
            [
                'id' => 2,
                'title' => 'Success',
            ]
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getGenders')) {
    function getGenders()
    {
        $types = [
            [
                'id' => 1,
                'title' => 'Male',
            ],
            [
                'id' => 2,
                'title' => 'Female',
            ],
            [
                'id' => 3,
                'title' => 'Other',
            ]
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getAccountStatus')) {
    function getAccountStatus()
    {
        $types = [
            [
                'id' => 1,
                'title' => 'Active',
            ],
            [
                'id' => 2,
                'title' => 'Suspended',
            ],
            [
                'id' => 3,
                'title' => 'Banned',
            ]
        ];
        $types = json_decode(json_encode($types));
        return $types;
    }
}

if (!function_exists('getActiveBadge')) {
    function getActiveBadge($val = 0)
    {
        return $val ? '<span class="badge badge-light-success">Yes</span>' : '<span class="badge badge-light-danger">No</span>';
    }
}

if (!function_exists('getCatsBreadcrumbOptions')) {
    function getCatsBreadcrumbOptions($categories)
    {
        $categoryMap = [];

        // Step 1: Store categories in an array for quick lookup
        foreach ($categories as $cat) {
            $categoryMap[$cat['id']] = [
                'id' => $cat['id'],
                'title' => $cat['title'],
                'parent_id' => $cat['parent_id'],
                'fullLabel' => $cat['title'],
            ];
        }

        // Step 2: Construct full label paths
        foreach ($categories as $cat) {
            if ($cat['parent_id'] != 0 && isset($categoryMap[$cat['parent_id']])) {
                $parent = $categoryMap[$cat['parent_id']];
                $categoryMap[$cat['id']]['fullLabel'] = $parent['fullLabel'] . ' > ' . $cat['title'];
            }
        }

        // Step 3: Convert to final select options with formatted label
        $options = array_map(function ($cat) {
            $parts = explode(' > ', $cat['fullLabel']);
            $lastPart = array_pop($parts);  // Get the last category title
            $grayPart = count($parts) ? '<span style="color:gray">' . implode(' > ', $parts) . '</span> > ' : '';

            return (object) [
                'id' => (string) $cat['id'],
                'title' => $grayPart . '<strong>' . $lastPart . '</strong>',
            ];
        }, array_values($categoryMap));

        // Step 4: Add "Root Category" at the top
        array_unshift($options, (object) ['id' => '0', 'title' => 'Root Category']);

        return $options;
    }
}

if (!function_exists('deleteImage')) {
    function deleteImage($image = '')
    {
        // Delete old logo if it exists
        if ($image && Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getAssociatedFaqs')) {
    function getAssociatedFaqs($associated_type, $associated_id)
    {
        $not_found = "<div class='alert alert-danger mt-1'>No Associated Faqs Found</div>";
        if ($associated_type == '' || $associated_id == '') {
            return $not_found;
        }
        $faqs = App\Models\Admin\AssociatedFaq::where('associated_type', $associated_type)
            ->where('associated_id', $associated_id)
            ->get();

        $output = '';
        $i = 1;
        if ($faqs->count() == 0) {
            return $not_found;
        }
        foreach ($faqs as $faq) {
            $output .= '<div class="card">
                <div class="card-header">
                    <h5>
                        <button type="button" class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                            data-bs-target="#collapseicon' . $i . '" aria-expanded="false" aria-controls="collapseicon">
                            <i data-feather="help-circle"></i> ' . $faq->q . '
                        </button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon' . $i . '" aria-labelledby="collapseicon"
                    data-bs-parent="#accordionoc">
                    <div class="card-body">
                        ' . $faq->a . '
                    </div>
                </div>
            </div>';
            $i++;
        }

        return $output;
    }
}
if (!function_exists('get_formatted_date')) {
    function get_formatted_date($date, $d = 0)
    {
        $date = date_create($date);
        if ($d) {
            return date_format($date, "d-M-Y");
        } else {
            return date_format($date, "d-M-Y - h:i a");
        }
    }
}

/*
 * ->with('images')
 *             ->first();
 *     }
 *
 * }
 *
 *
 *
 *
 * /*
 * if (!function_exists('get_common_combo')) {
 *     function get_common_combo($table, $selected = 0, $ref = '', $where = '', $required = 1, $tabindex = 1)
 *     {
 *         $output = 0;
 *
 *         $result = DB::table($table)->get();
 *
 *         if ($required) $mandatory = 'required="required"';
 *         else $mandatory = '';
 *
 *         $output = '<select class="listing-input hero__form-input form-control custom-select" id="' . str_replace("[]", '', $ref) . '" name="' . $ref . '"  ' . $mandatory . ' tabindex=' . $tabindex . '><option value="">--Select--</option>';
 *
 *         if ($result) {
 *             foreach ($result as $row) {
 *                 if ($row->id == $selected) $select = "selected";
 *                 else $select = "";
 *                 $output .= '<option ' . $select . ' value="' . $row->id . '">' . $row->title . '</option>';
 *             }
 *         }
 *         $output .= '</select>';
 *         echo $output;
 *     }
 * }
 *
 * if (!function_exists('get_data_of')) {
 *     function get_data_of($table = '', $feilds = '*', $where = '', $row = 0)
 *     {
 *         if (!empty($table)) {
 *
 *             $result = DB::select(DB::raw("SELECT $feilds FROM $table WHERE id>0 $where "));
 *             if ($row)
 *                 return $result[0];
 *             else
 *                 return $result;
 *         } else {
 *             return 0;
 *         }
 *     }
 * }
 *
 * if (!function_exists('get_formatted_date')) {
 *     function get_formatted_date($date, $d = 0)
 *     {
 *         $date = date_create($date);
 *         if ($d) {
 *             return date_format($date, "d-M-Y");
 *         } else {
 *             return date_format($date, "d-M-Y - h:i a");
 *         }
 *     }
 * }
 *
 * if (!function_exists('get_specific_field')) {
 *     function get_specific_field($table = '', $field = '', $where = '')
 *     {
 *         $output = '';
 *         if (!empty($table) && !empty($field) && !empty($where)) {
 *             $result = DB::select(DB::raw("SELECT $field FROM $table WHERE id>0 AND $where ORDER BY id DESC LIMIT 1 "));
 *             if ($result) {
 *                 $output = trim($result[0]->$field);
 *             }
 *         }
 *         return $output;
 *     }
 * }
 *
 * // DASHBOARD FUNCTIONS - starting
 * if (!function_exists('get_count')) {
 *     function get_count($table = '', $where = '')
 *     {
 *         $output = 0;
 *
 *         return $output;
 *     }
 * }
 * // DASHBOARD FUNCTIONS - starting
 */
