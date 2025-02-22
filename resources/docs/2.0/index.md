- ## Get Started

    - [Prologue](/{{route}}/{{version}}/overview)
    - [Introduction](/{{route}}/{{version}}/intro/introduction)
    - [Pre Request](/{{route}}/{{version}}/intro/prerequest)
    - [Installation](/{{route}}/{{version}}/intro/installation)


- ## Frameworks
    - [Introduction](/{{route}}/{{version}}/framework/introduction)
    - [Laravel](/{{route}}/{{version}}/framework/laravel)
    - [Livewire](/{{route}}/{{version}}/framework/livewire)
    - [Tailwind Css](/{{route}}/{{version}}/framework/tailwindcss)
    - [Alpine JS](/{{route}}/{{version}}/framework/alpinejs)
    - [Markdown](/{{route}}/{{version}}/framework/markdown)
    - [Testing](/{{route}}/{{version}}/framework/testing)

- ## E-Commerce
  - [Introduction](/{{route}}/{{version}}/projects/introduction)
  - [Basic Overview of the project](/{{route}}/{{version}}/projects/Basic_OverView)
  - [Project Tour](/{{route}}/{{version}}/projects/project_tour)
  - [Features](/{{route}}/{{version}}/projects/features)
  - [E-Commerce](/{{route}}/{{version}}/projects/ecommerce)
  - [product](/{{route}}/{{version}}/projects/product)
  - [Challenges](/{{route}}/{{version}}/projects/challenges)
  - [Vendor](/{{route}}/{{version}}/projects/vendor)
  - [Blogs](/{{route}}/{{version}}/projects/blog)
  - [Contact](/{{route}}/{{version}}/projects/contact)
  - [Customer](/{{route}}/{{version}}/projects/Customer_page)

- ## Billing


 - [Introduction](/{{route}}/{{version}}/billing/introduction)


 - [Features](/{{route}}/{{version}}/billing/features)




<div id="module-toggle" style="cursor: pointer; font-weight: 500; color: gray; padding-left: 1.8rem; padding-top: 0.5rem;">
   Modules ▼
</div>


<div id="module-list" style="display: none; margin-left: 20px;">
  <ul style="list-style: none;  padding-top: 1rem; ">
    <li style=" padding-left: 0.2rem; padding-bottom: 0.2rem; margin-bottom: 8px;"><a style="color: gray;" href="/docs/1.0/billing/modules/entries">📥 Entry</a></li>
    <li style="padding-left: 0.2rem;  padding-bottom: 0.2rem; margin-bottom: 8px;"><a style="color: gray;" href="/docs/1.0/billing/modules/transactions">💳 Transaction</a></li>
    <li style="padding-left: 0.2rem;  padding-bottom: 0.2rem; margin-bottom: 8px;"><a style="color: gray;" href="/docs/1.0/billing/modules/master">📊 Master</a></li>
    <li style="padding-left: 0.2rem;  padding-bottom: 0.2rem; margin-bottom: 8px;"><a style="color: gray;" href="/docs/1.0/billing/modules/common">🌐 Common</a></li>
    <li style="padding-left: 0.2rem;  padding-bottom: 0.2rem; margin-bottom: 8px;"><a style="color: gray;" href="/docs/1.0/billing/modules/task">📝 Task</a></li>

  </ul>
</div>




- ## Meetup
 - [31-01-2025](/{{route}}/{{version}}/meetup/31_01_2025)


<style>
  #module-toggle:hover {
      text-decoration: underline;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      const moduleToggle = document.getElementById("module-toggle");
      const moduleList = document.getElementById("module-list");

      moduleToggle.addEventListener("click", function () {
          const isHidden = moduleList.style.display === "none";
          moduleList.style.display = isHidden ? "block" : "none";
          moduleToggle.innerHTML = isHidden ? " Modules ▲" : " Modules ▼";
      });
  });
</script>



