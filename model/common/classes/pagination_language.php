<?php

//=========================================================================================================================================================================
class pagination {

    function pagination_admin($total_rows, $rowsPerPage, $pageNum, $pageName, $other_id, $class) {
        $links_perpage = 5;        // TOTAL NUMBER OF LINKS TO BE DISPLAYED PER PAGE
        $self = $pageName;      // NAME OF THE MAIN PAGE

        $nav = '';
        $maxPage = ceil($total_rows / $rowsPerPage);
        $lastfive = $maxPage - 3;
        $nextfive = $pageNum + 2;
        $oid = $other_id;

        for ($page = 1; $page <= $maxPage; $page++) {
            if ($page == $pageNum) {         // IF ON THE CURRENT PAGE
                $prevpg = $page - 1;       // PREVIOUS PAGE
                $prev2pg = $prevpg - 1;     // PREVIOUS 2 PAGES
                $nxtpg = $page + 1;      // NEXT PAGE

                $lastpg = $maxPage;      // LAST PAGE
                $last2pg = lastpg - 1;      // SECOND LAST PAGE
                $final = $maxPage;      // LAST PAGE


                if ($prevpg) {
                    if ($prev2pg) {
                        if ($oid != '') {
                            $nav.= " <a href=\"$self&page=$prev2pg&$oid\" class=" . "$class" . ">$prev2pg</a> &nbsp;";   // LINKS FOR PREVIOUS 2 PAGEs
                        } else {
                            $nav.= " <a href=\"$self&page=$prev2pg\" class=" . "$class" . ">$prev2pg</a> &nbsp;";   // LINKS FOR PREVIOUS 2 PAGEs	
                        }
                    }
                    if ($oid != '') {
                        $nav .= " <a href=\"$self&page=$prevpg&$oid\" class=" . "$class" . ">$prevpg</a> &nbsp;";   // FOR PREVIOUS PAGE
                    } else {
                        $nav .= " <a href=\"$self&page=$prevpg\" class=" . "$class" . ">$prevpg</a> &nbsp;";   // FOR PREVIOUS PAGE	
                    }
                }

                $nav .= "<a class=" . "pagination_selected" . ">$page</a>&nbsp;";              // no need to create a link to current page


                if ($prevpg == 0) {                    // IN CASE WE ARE ON FIRST PAGE FIRST 5 PAGES LINK DISPLAYED
                    if ($maxPage <= $links_perpage) {
                        for ($k = 2; $k <= $maxPage; $k++) {
                            if ($oid != '') {
                                $nav .= " <a href=\"$self&page=$k&$oid\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"$self&page=$k\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    } else {
                        for ($k = $nxtpg; $k <= $links_perpage; $k++) {
                            if ($oid != '') {
                                $nav .= " <a href=\"$self&page=$k&$oid\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"$self&page=$k\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    }
                }

                if ($prevpg >= 1) {                     // IF WE ARE ON ONE OF THE MIDDLE PAGES
                    for ($k = $pageNum + 1; $k <= $nextfive; $k++) {

                        if ($k > $maxPage) {                  // IF K COUNT GOES BEYOND LAST PAGE NO LINK
                            $nav .= "";
                        } else {
                            if ($oid != '') {
                                $nav .= " <a href=\"$self&page=$k&$oid\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"$self&page=$k\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    }
                }
            }
        }
        // creating previous and next link
        // plus the link to go straight to
        // the first and last page
        if ($pageNum > 1) {

            $page = $pageNum;
            $prevpg = $page - 1;

            if ($pageNum > 3) {
                if ($prevpg <= $maxPage) {
                    if ($oid != '') {
                        $prev = " <a href=\"$self&page=$prevpg&$oid\" class=" . "$class" . ">Prev</a> &nbsp;";
                    } else {
                        $prev = " <a href=\"$self&page=$prevpg\" class=" . "$class" . ">Prev</a> &nbsp;";
                    }
                }
            }
            if ($oid != '') {
                $first = " <a href=\"$self&page=1&$oid\" class=" . "$class" . ">First</a> &nbsp;";
            } else {
                $first = " <a href=\"$self&page=1\" class=" . "$class" . ">First</a> &nbsp;";
            }
        } else {
            $prev = '&nbsp;'; // we're on page one, don't print previous link
            $first = '&nbsp;'; // nor the first page link
        }
        if ($pageNum < $maxPage) {
            $page = $pageNum + 1;
            $nextpg = $page;
            if ($maxPage > $nextpg) {
                if ($pageNum == 1 && $maxPage == 5) {
                    $nextpg = 5;
                }
                if ($pageNum == 1 && $maxPage > 5) {
                    $nextpg = 2;
                    if ($oid != '') {
                        $next = " <a href=\"$self&page=$nextpg&$oid\" class=" . "$class" . ">Next</a> &nbsp;";
                    } else {
                        $next = " <a href=\"$self&page=$nextpg\" class=" . "$class" . ">Next</a> &nbsp;";
                    }
                } else {
                    if ($oid != '') {
                        $next = " <a href=\"$self&page=$nextpg&$oid\" class=" . "$class" . ">Next</a> &nbsp;";
                    } else {
                        $next = " <a href=\"$self&page=$nextpg\" class=" . "$class" . ">Next</a> &nbsp;";
                    }
                }
            }
            if ($oid != '') {
                $last = " <a href=\"$self&page=$maxPage&$oid\" class=" . "$class" . ">Last</a> &nbsp;";
            } else {
                $last = " <a href=\"$self&page=$maxPage\" class=" . "$class" . ">Last</a> &nbsp;";
            }
        } else {
            $next = '&nbsp;'; // we're on the last page, don't print next link
            $last = '&nbsp;'; // nor the last page link
        }
        // print the navigation link
        return $var = $first . $prev . $nav . $next . $last;
    }

    /*     * *************************************************************************************** */

    function ajaxPaginationOld($total_rows, $rowsPerPage, $pageNum, $pageName, $other_id, $class) {
        $links_perpage = 5;        // TOTAL NUMBER OF LINKS TO BE DISPLAYED PER PAGE
        $self = $pageName;      // NAME OF THE MAIN PAGE

        $nav = '';
        $maxPage = ceil($total_rows / $rowsPerPage);
        $lastfive = $maxPage - 3;
        $nextfive = $pageNum + 2;
        $oid = $other_id;

        for ($page = 1; $page <= $maxPage; $page++) {
            if ($page == $pageNum) {         // IF ON THE CURRENT PAGE
                $prevpg = $page - 1;       // PREVIOUS PAGE
                $prev2pg = $prevpg - 1;     // PREVIOUS 2 PAGES
                $nxtpg = $page + 1;      // NEXT PAGE

                $lastpg = $maxPage;      // LAST PAGE
                $last2pg = lastpg - 1;      // SECOND LAST PAGE
                $final = $maxPage;      // LAST PAGE


                if ($prevpg) {
                    if ($prev2pg) {
                        if ($oid != '') {
                            $nav.= " <a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prev2pg</a> &nbsp;";   // LINKS FOR PREVIOUS 2 PAGEs
                        } else {
                            $nav.= " <a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prev2pg</a> &nbsp;";   // LINKS FOR PREVIOUS 2 PAGEs	
                        }
                    }
                    if ($oid != '') {
                        $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prevpg</a> &nbsp;";   // FOR PREVIOUS PAGE
                    } else {
                        $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prevpg</a> &nbsp;";   // FOR PREVIOUS PAGE	
                    }
                }

                $nav .= "<a class=" . "pagination_selected" . ">$page</a>&nbsp;";              // no need to create a link to current page


                if ($prevpg == 0) {                    // IN CASE WE ARE ON FIRST PAGE FIRST 5 PAGES LINK DISPLAYED
                    if ($maxPage <= $links_perpage) {
                        for ($k = 2; $k <= $maxPage; $k++) {
                            if ($oid != '') {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    } else {
                        for ($k = $nxtpg; $k <= $links_perpage; $k++) {
                            if ($oid != '') {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    }
                }

                if ($prevpg >= 1) {                     // IF WE ARE ON ONE OF THE MIDDLE PAGES
                    for ($k = $pageNum + 1; $k <= $nextfive; $k++) {

                        if ($k > $maxPage) {                  // IF K COUNT GOES BEYOND LAST PAGE NO LINK
                            $nav .= "";
                        } else {
                            if ($oid != '') {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            } else {
                                $nav .= " <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> &nbsp;";
                            }
                        }
                    }
                }
            }
        }
        // creating previous and next link
        // plus the link to go straight to
        // the first and last page
        if ($pageNum > 1) {

            $page = $pageNum;
            $prevpg = $page - 1;

            if ($pageNum > 3) {
                if ($prevpg <= $maxPage) {
                    if ($oid != '') {
                        $prev = " <a href=\"javascript:;\" onclick=\"return callPagination('$prevpg');\" class=" . "$class" . ">Prev</a> &nbsp;";
                    } else {
                        $prev = " <a href=\"javascript:;\" onclick=\"return callPagination('$prevpg');\" class=" . "$class" . ">Prev</a> &nbsp;";
                    }
                }
            }
            if ($oid != '') {
                $first = " <a href=\"javascript:;\" onclick=\"return callPagination('1');\" class=" . "$class" . ">First</a> &nbsp;";
            } else {
                $first = " <a href=\"javascript:;\" onclick=\"return callPagination('1');\" class=" . "$class" . ">First</a> &nbsp;";
            }
        } else {
            $prev = '&nbsp;'; // we're on page one, don't print previous link
            $first = '&nbsp;'; // nor the first page link
        }
        if ($pageNum < $maxPage) {
            $page = $pageNum + 1;
            $nextpg = $page;

            if ($maxPage > $nextpg) {
                if ($pageNum == 1 && $maxPage == 5) {
                    $nextpg = 5;
                }
                if ($pageNum == 1 && $maxPage < 5) {
                    $nextpg = 2;
                    if ($oid != '') {
                        $next = " <a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">Next</a> &nbsp;";
                    } else {
                        $next = " <a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">Next</a> &nbsp;";
                    }
                } else {
                    if ($oid != '') {
                        $next = " <a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">Next</a> &nbsp;";
                    } else {
                        $next = " <a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">Next</a> &nbsp;";
                    }
                }
            }
            if ($oid != '') {
                $last = " <a href=\"javascript:;\" onclick=\"return callPagination('$maxPage');\" class=" . "$class" . ">Last</a> &nbsp;";
            } else {
                $last = " <a href=\"javascript:;\" onclick=\"return callPagination('$maxPage');\" class=" . "$class" . ">Last</a> &nbsp;";
            }
        } else {
            $next = '&nbsp;'; // we're on the last page, don't print next link
            $last = '&nbsp;'; // nor the last page link
        }
        // print the navigation link
        return $var = $first . $prev . $nav . $next . $last;
    }

    function ajaxPagination($total_rows, $rowsPerPage, $pageNum, $pageName, $other_id, $ulclass, $langArray = "") {

        $links_perpage = 5;        // TOTAL NUMBER OF LINKS TO BE DISPLAYED PER PAGE
        $self = $pageName;      // NAME OF THE MAIN PAGE

        $nav = '';
        $maxPage = ceil($total_rows / $rowsPerPage);
        $lastfive = $maxPage - 3;
        $nextfive = $pageNum + 2;
        $oid = $other_id;

        for ($page = 1; $page <= $maxPage; $page++) {
            if ($page == $pageNum) {         // IF ON THE CURRENT PAGE
                $prevpg = $page - 1;       // PREVIOUS PAGE
                $prev2pg = $prevpg - 1;     // PREVIOUS 2 PAGES
                $nxtpg = $page + 1;      // NEXT PAGE

                $lastpg = $maxPage;      // LAST PAGE
                $last2pg = $lastpg - 1;      // SECOND LAST PAGE
                $final = $maxPage;      // LAST PAGE


                if ($prevpg) {
                    if ($prev2pg) {
                        if ($oid != '') {
                            $nav.= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prev2pg</a> </li>";   // LINKS FOR PREVIOUS 2 PAGEs
                        } else {
                            $nav.= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prev2pg</a> </li>";   // LINKS FOR PREVIOUS 2 PAGEs	
                        }
                    }
                    if ($oid != '') {
                        $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prevpg</a> </li>";   // FOR PREVIOUS PAGE
                    } else {
                        $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\" class=" . "$class" . ">$prevpg</a> </li>";   // FOR PREVIOUS PAGE	
                    }
                }

                $nav .= "<li class='active top'><a href=\"javascript:;\" onclick=\"return callPagination('$prev2pg');\"><b class=" . "pagination_selected" . ">$page</b></a></li>";              // no need to create a link to current page


                if ($prevpg == 0) {                    // IN CASE WE ARE ON FIRST PAGE FIRST 5 PAGES LINK DISPLAYED
                    if ($maxPage <= $links_perpage) {
                        for ($k = 2; $k <= $maxPage; $k++) {
                            if ($oid != '') {
                                $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a></li>";
                            } else {
                                $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> </li>";
                            }
                        }
                    } else {
                        for ($k = $nxtpg; $k <= $links_perpage; $k++) {
                            if ($oid != '') {
                                $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> </li>";
                            } else {
                                $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a> </li>";
                            }
                        }
                    }
                }

                if ($prevpg >= 1) {                     // IF WE ARE ON ONE OF THE MIDDLE PAGES
                    for ($k = $pageNum + 1; $k <= $nextfive; $k++) {

                        if ($k > $maxPage) {                  // IF K COUNT GOES BEYOND LAST PAGE NO LINK
                            $nav .= "";
                        } else {
                            if ($oid != '') {
                                $nav .= " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a></li>";
                            } else {
                                $nav .= "<li class='top'> <a href=\"javascript:;\" onclick=\"return callPagination('$k');\" class=" . "$class" . ">$k</a></li>";
                            }
                        }
                    }
                }
            }
        }


        if (empty($langArray)) {
            $nextlabel = 'Next';
            $prelabel = 'Prev';
            $lastlabel = 'Last';
            $firstlabel = 'First';
        } else {

            $firstlabel = $langArray['first'];
            $lastlabel = $langArray['last'];
            $prelabel = $langArray['pre'];
            $nextlabel = $langArray['next'];
        }
        // creating previous and next link
        // plus the link to go straight to
        // the first and last page
        if ($pageNum > 1) {

            $page = $pageNum;
            $prevpg = $page - 1;

            if ($pageNum > 3) {
                if ($prevpg <= $maxPage) {
                    if ($oid != '') {
                        $prev = "<li class='top'> <a href=\"javascript:;\" onclick=\"return callPagination('$prevpg');\" class=" . "$class" . ">" . $prelabel . "</a></li>";
                    } else {
                        $prev = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$prevpg');\" class=" . "$class" . ">" . $prelabel . "</a></li>";
                    }
                }
            }
            if ($oid != '') {
                $first = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('1');\" class=" . "$class" . ">" . $firstlabel . "</a></li>";
            } else {
                $first = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('1');\" class=" . "$class" . ">" . $firstlabel . "</a></li>";
            }
        } else {
            $prev = ''; // we're on page one, don't print previous link
            $first = ''; // nor the first page link
        }
        if ($pageNum < $maxPage) {
            $page = $pageNum + 1;
            $nextpg = $page;

            if ($maxPage > $nextpg) {
                if ($pageNum == 1 && $maxPage == 5) {
                    $nextpg = 2;
                }

                if ($pageNum == 1 && $maxPage < 5) {
                    $nextpg = 2;
                    if ($oid != '') {
                        $next = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">" . $nextlabel . "</a></li>";
                    } else {
                        $next = "<li class='top'> <a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">" . $nextlabel . "</a> </li>";
                    }
                } else {
                    if ($oid != '') {
                        $next = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">" . $nextlabel . "</a></li>";
                    } else {
                        $next = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$nextpg');\" class=" . "$class" . ">" . $nextlabel . "</a> </li>";
                    }
                }
            }
            if ($oid != '') {
                $last = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$maxPage');\" class=" . "$class" . ">" . $lastlabel . "</a></li>";
            } else {
                $last = " <li class='top'><a href=\"javascript:;\" onclick=\"return callPagination('$maxPage');\" class=" . "$class" . ">" . $lastlabel . "</a></li>";
            }
        } else {
            $next = ''; // we're on the last page, don't print next link
            $last = ''; // nor the last page link
        }
        // print the navigation link
        return $var = '<ul class="' . $ulclass . '">' . $first . $prev . $nav . $next . $last . '</ul>';
    }

}

?>
