#Stanley - A portfolio theme for anchorcms
####Stanley is a really simple theme for those wanting to showcase their work with a cute & clean style.



#Installation
Copy the folder **"stanley"** to the anchor directory **/themes**.

Now you need some custom fields, a "work" category and site variables.



##Custom Fields

###Posts
#####img_work
- Type: post
- Field: image
- Unique Key: img_work
- Label: Work image
- File types: png,jpg,jpeg,gif --> you can add more
- Image max width: 400
- Image max height: 300


##Category
#####Work
- Title: Work
- Slug: work
- Description: My work & portfolio --> write a description


##Site Variables

###Posts

#####cat_work 
- Name: cat_work
- Value: 2 

(the value is the category id of "work")

###Footer
#####address
- Name: address
- Value: `Some Address 987,<br>
+34 9054 5455,<br>
Madrid, Spain. <br>` 

(you need html to style this text)

#####acc_dribbble
- Name: acc_dribbble
- Value: your_value 

(your twitter profile name https://dribbble.com/**enterthisvalue**)

#####acc_twitter
- Name: acc_twitter
- Value: your_value 
- 
(your twitter profile name https://twitter.com/**enterthisvalue**)

#####acc_facebook
- Name: acc_facebook
- Value: your_value 

(your twitter profile name https://www.facebook.com/**enterthisvalue**)



#####about
- Name: about
- Value: `This cute theme was created to showcase your work in a simple way. Use it wisely.
This is just an anchor variable filled with content yeah.`

(you need html to style this text)



