<template>
  <main class="space-y-20">
    <!-- SECTION WITH SLIDER AND CATEGORIES -->
    <section class="container mx-auto">
      <category-carousel-section/>
    </section>

    <!-- PRODUCT ON SALES SLIDER -->
    <section class="container mx-auto">
      <suspense>
        <flash-sales/>
        <template #fallback>
          <products-skeleton :card-number="5"/>
        </template>
      </suspense>
    </section>

    <!-- CATEGORIES SLIDER -->
    <section class="container mx-auto">
      <suspense>
        <categories-browse-list/>
        <template #fallback>
          <categories-skeleton :card-number="6"/>
        </template>
      </suspense>
    </section>

    <!-- BRANDS SLIDER -->
    <section class="container mx-auto">
      <suspense>
        <brands-browse-list/>
        <template #fallback>
          <suspense-loader/>
        </template>
      </suspense>
    </section>

    <!-- TOP SELLERS -->
    <section class="container mx-auto">
      <suspense>
        <top-sellers/>
        <template #fallback>
          <products-skeleton :card-number="6"/>
        </template>
      </suspense>
    </section>

    <!-- EXPLORE PRODUCTS -->
    <section class="container mx-auto">
      <suspense>
        <explore-products/>
        <template #fallback>
          <products-skeleton :card-number="10"/>
        </template>
      </suspense>
    </section>

    <!-- NEW ARRIVAL SECTION -->
    <section class="container mx-auto">
      <suspense>
        <new-arrivals/>
        <template #fallback>
          <suspense-loader/>
        </template>
      </suspense>
    </section>

    <!-- LAST SECTION -->
    <section class="container mx-auto !my-36">
      <div class="flex justify-around">
        <guarantee
            :title="'FREE AND FAST DELIVERY'"
            :text="'Free delivery for all orders over $140'"
        >
          <svg
              width="40"
              height="40"
              viewBox="0 0 24 24"
              fill="white"
              xmlns="http://www.w3.org/2000/svg"
              color="white"
          >
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.25 3.25C3.00736 3.25 2 4.25736 2 5.5V16C2 17.2426 3.00736 18.25 4.25 18.25H4.30197C4.56712 19.6729 5.81527 20.75 7.315 20.75C8.81473 20.75 10.0629 19.6729 10.328 18.25H14.052C14.3171 19.6729 15.5653 20.75 17.065 20.75C18.5647 20.75 19.8129 19.6729 20.078 18.25H22C22.4142 18.25 22.75 17.9142 22.75 17.5C22.75 17.0858 22.4142 16.75 22 16.75V12.4047C22 11.9553 21.8655 11.5163 21.6137 11.1441L19.0674 7.37945C18.6489 6.76072 17.9506 6.39003 17.2037 6.39003H15.75V5.5C15.75 4.25736 14.7426 3.25 13.5 3.25H4.25ZM7.315 14.62C5.94831 14.62 4.79055 15.5145 4.39523 16.75H4.25C3.83579 16.75 3.5 16.4142 3.5 16V5.5C3.5 5.08579 3.83579 4.75 4.25 4.75H13.5C13.9142 4.75 14.25 5.08579 14.25 5.5V16.4706C14.2107 16.5615 14.1757 16.6547 14.1452 16.75H10.2348C9.83945 15.5145 8.68169 14.62 7.315 14.62ZM17.065 14.62C16.5944 14.62 16.1485 14.7261 15.75 14.9156V12.695L20.5 12.695V16.75H19.9848C19.5895 15.5145 18.4317 14.62 17.065 14.62ZM19.8373 11.195L15.75 11.195V7.89003H17.2037C17.4527 7.89003 17.6854 8.01359 17.8249 8.21983L19.8373 11.195ZM15.5 17.685C15.5 16.8207 16.2007 16.12 17.065 16.12C17.9293 16.12 18.63 16.8207 18.63 17.685C18.63 18.5493 17.9293 19.25 17.065 19.25C16.2007 19.25 15.5 18.5493 15.5 17.685ZM5.75 17.685C5.75 16.8207 6.45067 16.12 7.315 16.12C8.17933 16.12 8.88 16.8207 8.88 17.685C8.88 18.5493 8.17933 19.25 7.315 19.25C6.45067 19.25 5.75 18.5493 5.75 17.685Z"
                fill="white"
            />
          </svg>
        </guarantee>
        <guarantee
            :title="'24/7 CUSTOMER SERVICE'"
            :text="'Friendly 24/7 customer support'"
        >
          <svg
              width="40"
              height="40"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
          >
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 3.25C7.16753 3.25 3.25 7.16753 3.25 12V17.0518C3.25 17.054 3.25001 17.0563 3.25003 17.0586V17.25C3.25003 18.4926 4.25739 19.5 5.50003 19.5H6.50003C7.74267 19.5 8.75003 18.4926 8.75003 17.25V13.75C8.75003 12.5074 7.74267 11.5 6.50003 11.5H5.50003C5.24061 11.5 4.99144 11.5439 4.75955 11.6247C4.95486 7.79505 8.12185 4.75 12 4.75C15.8782 4.75 19.0452 7.79502 19.2405 11.6246C19.0087 11.5439 18.7596 11.5 18.5002 11.5H17.5002C16.2576 11.5 15.2502 12.5074 15.2502 13.75V17.25C15.2502 18.4926 16.2576 19.5 17.5002 19.5H18.5002C19.7429 19.5 20.7502 18.4926 20.7502 17.25V13.75C20.7502 13.7418 20.7502 13.7336 20.7501 13.7254V12C20.7501 7.16753 16.8326 3.25 12 3.25ZM19.2501 13.7358V17.0518C19.2501 17.0565 19.2501 17.0612 19.2502 17.066V17.25C19.2502 17.6642 18.9144 18 18.5002 18H17.5002C17.086 18 16.7502 17.6642 16.7502 17.25V13.75C16.7502 13.3358 17.086 13 17.5002 13H18.5002C18.9097 13 19.2425 13.3281 19.2501 13.7358ZM6.50003 13C6.91424 13 7.25003 13.3358 7.25003 13.75V17.25C7.25003 17.6642 6.91424 18 6.50003 18H5.50003C5.08582 18 4.75003 17.6642 4.75003 17.25V13.75C4.75003 13.3358 5.08582 13 5.50003 13H6.50003Z"
                fill="white"
            />
          </svg>
        </guarantee>
        <guarantee
            :title="'MONEY BACK GUARANTEE'"
            :text="'We return money within 30 days'"
        >
          <svg
              width="40"
              height="40"
              viewBox="0 0 25 24"
              fill="#343C54"
              xmlns="http://www.w3.org/2000/svg"
          >
            <path
                d="M12.2519 5.5C12.6662 5.5 13.0019 5.83579 13.0019 6.25V6.68778C13.9927 6.83842 14.7519 7.69397 14.7519 8.72685C14.7519 9.14106 14.4162 9.47685 14.0019 9.47685C13.5877 9.47685 13.2519 9.14106 13.2519 8.72685C13.2519 8.41613 13.0001 8.16425 12.6893 8.16425H12.0019C11.5877 8.16425 11.2519 8.50003 11.2519 8.91425V9.17932C11.2519 9.49195 11.4459 9.77178 11.7386 9.88156L13.292 10.4641C14.1702 10.7935 14.7519 11.633 14.7519 12.5709V12.8359C14.7519 13.9067 14.0039 14.8028 13.0019 15.0302V15.5C13.0019 15.9142 12.6662 16.25 12.2519 16.25C11.8377 16.25 11.5019 15.9142 11.5019 15.5V15.0624C10.5111 14.9118 9.75194 14.0562 9.75194 13.0233C9.75194 12.6091 10.0877 12.2733 10.5019 12.2733C10.9162 12.2733 11.2519 12.6091 11.2519 13.0233C11.2519 13.3341 11.5038 13.5859 11.8145 13.5859H12.5019C12.9162 13.5859 13.2519 13.2502 13.2519 12.8359V12.5709C13.2519 12.2582 13.058 11.9784 12.7653 11.8686L11.2119 11.286C10.3337 10.9567 9.75194 10.1172 9.75194 9.17932V8.91425C9.75194 7.84345 10.4999 6.94737 11.5019 6.72V6.25C11.5019 5.83579 11.8377 5.5 12.2519 5.5Z"
                fill="white"
            />
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M13.1871 2.35323C12.5928 2.08148 11.9098 2.08148 11.3156 2.35323L5.5916 4.97088C4.79089 5.33705 4.27733 6.13663 4.27734 7.01709L4.27742 12.4822C4.27744 14.0385 4.75474 15.5847 5.75814 16.8262C6.55842 17.8164 7.64456 19.0736 8.75563 20.0899C9.31059 20.5975 9.88978 21.0618 10.4576 21.4032C11.011 21.7359 11.6317 22 12.2514 22C12.8712 22 13.4919 21.7359 14.0452 21.4032C14.6131 21.0618 15.1923 20.5976 15.7472 20.09C16.8583 19.0737 17.9444 17.8165 18.7447 16.8263C19.7481 15.5847 20.2254 14.0385 20.2254 12.4821L20.2253 7.01704C20.2253 6.1366 19.7118 5.33705 18.9111 4.97089L13.1871 2.35323ZM11.9394 3.71735C12.1375 3.62677 12.3652 3.62677 12.5632 3.71735L18.2872 6.33501C18.5541 6.45707 18.7253 6.72358 18.7253 7.01706L18.7254 12.4821C18.7254 13.7364 18.3413 14.939 17.5781 15.8834C16.7961 16.8509 15.7645 18.0413 14.7348 18.9832C14.2194 19.4546 13.7224 19.8471 13.2724 20.1177C12.8079 20.3969 12.469 20.5 12.2514 20.5C12.0339 20.5 11.695 20.3969 11.2305 20.1176C10.7805 19.8471 10.2835 19.4546 9.76804 18.9831C8.73831 18.0412 7.70673 16.8509 6.92475 15.8833C6.16153 14.939 5.77744 13.7364 5.77742 12.4822L5.77734 7.01707C5.77734 6.72358 5.94852 6.45706 6.21543 6.335L11.9394 3.71735Z"
                fill="white"
            />
          </svg>
        </guarantee>
      </div>
    </section>
  </main>
</template>

<script setup>
import CategoryCarouselSection from "@/components/Card/CategoryCarouselSection.vue";
import NewArrivals from "@/components/Product/Arrival/NewArrivals.vue";
import Guarantee from "@/components/Default/Guarantee.vue";
import {inject, onMounted} from "vue";
import ToastUnAuthAddToWishlist from "@/components/Default/Toasts/Wishlist/ToastUnAuthAddToWishlist.vue";
import {useToast} from "vue-toastification";
import wishlistToastSetting from "@/components/Default/Toasts/Wishlist/toastSettings.js";
import {useScrolling} from "@/composables/useScrolling.js";
import FlashSales from "@/shop/components/Products/Sales/FlashSales.vue";
import ProductsSkeleton from "@/management/components/Product/Other/ProductsSkeleton.vue";
import CategoriesBrowseList from "@/shop/components/Categories/CategoriesBrowseList.vue";
import CategoriesSkeleton from "@/management/components/Categories/CategoriesSkeleton.vue";
import ExploreProducts from "@/shop/components/Products/Sets/ExploreProducts.vue";
import TopSellers from "@/shop/components/Products/Sets/TopSellers.vue";
import SuspenseLoader from "@/components/Default/SuspenseLoader.vue";
import BrandsBrowseList from "@/shop/components/Brands/BrandsBrowseList.vue";

const emitter = inject("emitter");
const toast = useToast();

emitter.on("unauthenticated-add-to-wishlist", () => {
  const content = {
    component: ToastUnAuthAddToWishlist,
  };
  toast.error(content, wishlistToastSetting);
});

onMounted(() => {
  useScrolling().scrollToTop();
});
</script>
<style scoped></style>
