  <div class='product-card card w-80 rounded-md relative'>
      <?php if ($discount > 0) : ?>
          <span class="badge badge-secondary badge-error px-4 py-3 text-xl absolute top-0 right-0"><?= $discount . '%' ?></span>
      <?php endif;  ?>
      <picture class="center">
          <a href=<?php echo "?page=prod_overview&id={$id}" ?>>
              <img src=<?= ROOT_PRODUCT . $image ?> alt="" class="card-img max-w-sm h-60 object-contain">
          </a>
      </picture>
      <div class="card-body">
          <detail class="flex flex-col gap-0">
              <h4 class='text-[20px] w-full truncate '><?= $prod_name ?></h4>
              <span class='text-[#407CB4] text-xl font-medium'><?= $price . '₫' ?></span>
              <div class='rating block'>
                  <input type='radio' name='rating-1' class='mask mask-star-2 bg-orange-400' disabled />
                  <input type='radio' name='rating-1' class='mask mask-star-2 bg-orange-400' disabled />
                  <input type='radio' name='rating-1' class='mask mask-star-2 bg-orange-400' disabled checked />
                  <input type='radio' name='rating-1' class='mask mask-star-2 bg-orange-400' disabled />
                  <input type='radio' name='rating-1' class='mask mask-star-2 bg-orange-400' disabled />
              </div>
              <p><?= get_feedback_counter($id) . ' reviews' ?></p>
          </detail>
          <form action='?page=cart' method='post'>
              <div class="btn-group flex-nowrap w-full justify-items-stretch flex-grow">
                  <!-- product information form -->
                  <input type='hidden' name='id' value=<?= $id ?>>
                  <input type='hidden' name='name' value="<?php echo $prod_name ?>">
                  <input type='hidden' name='manu' value="<?php echo $manufacture ?>">
                  <input type='hidden' name='price' value=<?= $price ?>>
                  <input type='hidden' name='img' value=<?= $image ?>>
                  <input type='hidden' name='qty' value=1>
                  <input type='hidden' name='warranty' value=<?= $warranty_time ?>>
                  <input type='hidden' name='total' value=<?= $price * 1 ?>>
                  <!-- product card button group -->
                  <button type='submit' onclick="addCart(this)" class='flex-grow btn text-xl' name='add_btn'><i class="bi bi-cart3"></i></button>
                  <button type="button" onclick="addCart(this)" class="flex-grow btn text-xl"><i class="bi bi-bag-plus"></i></button>
                  <button type="button" onclick="addWishList(this)" class="flex-grow btn text-xl"><i class="bi bi-heart"></i></button>
              </div>
          </form>
      </div>
  </div>