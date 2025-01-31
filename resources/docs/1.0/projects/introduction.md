# E-Commerce Multi-Vendor Platform Structure

---

- [First Section](#section-1)

<a name="section-1"></a>
![structure](/docs/images/project/multi_vendor.png)


# 💻 Application Overview

The application is multi-vendor eCommerce platform with Role-based access control (RBAC) that empowers multiple vendors to sell their products from one storefront. Multivendor store gives shoppers a huge catalog to choose from and provides sellers with a bigger base of ready-to-buy customers.


## Data model

The application contains the following core features:

- User - can have three of these roles:
  #### Notable Features:
    - `CUSTOMERS` - can:
        - ✅ Customer can buy their favourite products with stripe payment.
        - ✅ Customer can save their favourite products, find them quickly and easily at a later time and buy them.
        - ✅ When the product is in the wishlist customer can ‘Remove from wishlist’.
        - ✅ Customer can see their recently viewed product.
        - ✅ Customer can search product with autocomplete feature.
        - ✅ Customer will get welcome email after sign up.
        - ✅ Customer can contact to the authority.
        - ✅ Customer can edit their own profile.
        - ✅ Customer can change shipping address.
        - ✅ Customer can change their password.
        - ✅ Customer can see recent orders from their profile.
        - ✅ Customer can see our blog post they can comment on post.
        - ✅ Customer can subscriber our newsletter.
        - ✅ Customer can also unsubscriber our newsletter.
        - ✅ Customer will get email after order has been successful purchased.
        - ✅ Customer can search orders from their own profile.
        - ✅ Customer can review product after successful purchased product.
        - ✅ Customer can share purchased product photo.
        - ✅ Customer can share thire experience with delivery man-rider.
        - ✅ Customer can see order status like Processing/Shipped/Delivered.
        - ✅ Customer can share product on social networks and get indirect advertising for your store.

    - `VENDOR` - can:
        - Product Stock Management
        - Vendor Order Email Notifications.
        - Import/Export Product via CSV.

            <p><small>Under developement: - Vendor can add Coupon for their store and can send newsletter to customer for advertising.</small></p>

    - `ADMIN` can:

        - Advanced settings for the admin –
            - Admin can view and manage vendor  and customer list
                - General Settings
                    - Admin can manage new product status.
                    - Admin can set the order status for withdraw.
                    - Admin can also enable/disable the permission of review editing for the vendor.

          Blog:
            - Blog
                - title,slug,image,category.
            - Tag
            - Comments
            - Category with filter
            - blog pagination max 5
            - Can view details of an blog
            - Search with blog title,slug and category

          Contact:
            - User can send mail to the authority.
            - Admin can see all contact information.
              <p><small>Note: Admin can't create,update,edit,delete  contact info from administration.</small></p>

          Newsletter:
            - Subscriber new customer
            - User can also unsubscriber our newsletter.
            - We have to send newsletter mail every week with new offer/ discusnt/ free shipping/ occasional offter
                <p><small>Note: Admin can't create,update,edit,delete  subscriber from administration.</small></p>      
                <p><small>Future developement:
                    - Only authority can send newsletter from there administration.
                  </small></p>


