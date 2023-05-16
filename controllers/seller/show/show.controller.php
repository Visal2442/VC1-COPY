<?php

require '../../../database/database.php';
require '../../../models/show.model.php';
$shows = getAllShows();
foreach ($shows as $show) :
    $show_modal = "deleteShow" . $show['show_id'];
    if($show['time']<"12:00"){
        $time= $show['time']." AM";
    }
    else{
        $time= $show['time']." PM";
    }
?>
    <tr class="font-medium text-gray-300 dark:text-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-600 border-b-2 border-gray-400">
        <td class=""><img src="../../../assets/movie_image/<?= $show["image"] ?>" width="80" height="80"></td>
        <td class="px-6 py-3"><?= $show["movie_name"] ?></td>
        <td class="px-6 py-3"><?= $show["venue_name"] ?></td>
        <td class="px-6 py-3"><?= $show["hall"] ?></td>
        <td class="px-6 py-3"><?= $show["date"] ?></td>
        <td class="px-6 py-3"><?= $time ?></td>
        <td class="px-6 py-3"><?= $show["price_per_ticket"]?>$</td>
        <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-500" onclick="editShow(<?= $show['show_id'] ?>)">Edit</a> <span class="font-bold">|</span>
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-500" data-te-toggle="modal" data-te-target="<?= '#' . $show_modal ?>">Delete</a>
        </td>
        <td>
            <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="<?= $show_modal ?>" tabindex="-1" aria-hidden="true">
                <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                    <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                        <div data-te-modal-body-ref class="relative text-lg text-left flex-auto p-4 text-red-600" >
                        <p>Do you want to delete this show ?</p>
                        </div>
                        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <button type="button" class="bg-gray-100 hover:bg-gray-200 px-6 py-2.5 text-black font-medium text-xs leading-tight uppercase border transition duration-150 ease-in-out rounded " data-te-modal-dismiss data-te-ripple-init>Cancel</button>
                            <button type="button" class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg transition duration-150 ease-in-out ml-1" data-te-ripple-init onclick="deleteShow(<?= $show['show_id'] ?>,<?= $show_modal ?>)"> Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>

<?php
endforeach;
?>