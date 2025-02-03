# Common

- [Common](#section-1)

<a name="section-1"></a>


The `Common` contains essential, pre-defined information that is used across various parts of the system. This data ensures consistency and accuracy in processes like sales, purchases, and more. It includes standard information like locations, product attributes, tax details, and business-specific settings.

<img src="/docs/images/billing/common.png" width="600" />

## 📌 Cities, States, Countries, and Pincodes

This section includes location data that is essential for managing customer and vendor addresses, shipping, and tax calculations.

- `Cities`: Names of cities used for storing address details.
- `States`: States within countries for proper address organization.
- `Countries`: Country names to help identify and classify locations.
- `Pincodes`: Postal codes used for accurate address matching and shipping.

**Example Usage**:
- Storing customer address information (city, state, country, pincode) for sales and shipping purposes.

---

## 📌 HSN Codes, GST Percent

This section contains tax-related information, specifically related to Goods and Services Tax (`GST`).

- `HSN Codes`: Used to classify goods and services for tax purposes.
- `GST Percent`: The applicable tax percentage for each product category (e.g., 5%, 12%, 18%).

**Example Usage**:
- Assigning the appropriate **HSN code** and **GST rate** to products during sales and purchase transactions.

---

## 📌 Units, Categories

This section deals with how products are measured and grouped.

- `Units`: The measurement unit for a product (e.g., pieces, kilograms, liters).
- `Categories`: Groups products into categories for easier management and reporting (e.g., Electronics, Furniture, Food).

**Example Usage**:
- Classifying products by **unit of measurement** (e.g., kilograms for grains) and **category** (e.g., Electronics for mobile phones).

---

## 📌 Colors, Sizes

This section helps in managing product variations such as colors and sizes, especially for items like clothing or customizable products.

- `Colors`: The available color options for a product (e.g., Red, Blue, Black).
- `Sizes`: The available size options for a product (e.g., Small, Medium, Large).

**Example Usage**:
- Managing **color and size variations** for products such as T-shirts or shoes.

---

## 📌 Banks, Receipt Types, Dispatch Styles

This section contains business-specific settings related to payments and shipping.

- `Banks`: Lists the banks used for processing payments and deposits.
- `Receipt Types`: Defines types of receipts, such as cash, cheque, or UPI payment receipts.
- `Dispatch Styles`: Defines how products are delivered to customers (e.g., Standard Delivery, Express Delivery).

**Example Usage**:
- Managing payment methods and types of receipts (e.g., **UPI receipts** for online payments).

---


