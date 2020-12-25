# Magento Free Shipping Bar GraphQL

**Magento 2 Free Shipping Bar GraphQL is now a part of the Mageplaza Free Shipping Bar extension that adds GraphQL features. This supports PWA compatibility.** 

[Mageplaza Free Shipping Bar for Magento 2](https://www.mageplaza.com/magento-2-free-shipping-bar/) enables you to offer free shipping in a tempting manner that creates incentives for customers when shopping in your store. When your customers feel uncertain about whether to buy something from you, this will be a friendly and appealing reminder about the benefit they will get if spending more on your store. 

The extension will help you leverage free shipping to satisfy customers and increase the order value while not hurting your profit margin. With the Free Shipping Bar extension's help, you can create and display a free shipping bar on any page of your website. You can show a free shipping bar on 4 default positions on a page or place it anywhere by using a snippet. 

With customizable and easy configuration, you can change the template and messages of the shipping bar that match your store’s theme and the current campaigns you are running. It's also easy to customize all messages in each step of the free shipping bar to be more intriguing and convincing to your customers to be more intriguing and convincing to your customers. 

It’s necessary to set the conditions for the customers to get a free shipping offer. To do that, Mageplaza Free Shipping Bar automatically updates the bar’s message based on your customers’ cart total. It first announces the conditions of the cart total to achieve free shipping. The message then changes to the amount left to reach the goal if customers haven't added enough items to their cart. Finally, it shows the congratulations if customers’ shopping carts reach your free shipping threshold. 

There is no restriction on displaying a free shipping bar on your store, so it depends on your purposes to decide where to place a free shipping bar. No matter what, make it easy to see and visually eye-catching for shoppers.

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-free-shipping-bar-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Free Shipping Bar GraphQL requires installing [Mageplaza Free Shipping Bar](https://www.mageplaza.com/magento-2-free-shipping-bar/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Free Shipping Bar GraphQL** extension supports, you can look in `Docs > Query` in the right corner

## 3. Devdocs

- [Free Shipping Bar API & examples](https://documenter.getpostman.com/view/10589000/TVCY7CNb#887674fb-7cdd-46d5-87b3-f5aed3bd67ce)
- [Free Shipping Bar GraphQL & examples](https://documenter.getpostman.com/view/10589000/TVsuDo2Z)


## 4. Contribute to this module

- Feel free to **Fork** and contribute to this module. 
- You can create a pull request and we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
