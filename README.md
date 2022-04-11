# Instagram-clone
[![Financial Contributors on Open Collective](https://opencollective.com/instagram-clone-php/all/badge.svg?label=financial+contributors)](https://opencollective.com/instagram-clone-php) 

An Instagram-clone with my own flavors and features!!


Feel free to contribute!!

# Quick links
1. [Features](#features)
2. [Requirements](#requirements)
3. [Own the project](#own-the-project)
4. [Login/Signup Error](#loginsignup-error)
5. [Contribute](#contribute)
6. [Images copyright claims](#copyright-claims)


# Features
1. Login, Signup, Forgot password (with email verification).
2. Quick Login like in Facebook and Instagram (this means app remembers that you had logged in, so you only have enter password to login again).
3. Indicates that users exists as you type username when signing up.
4. About, Developer, Help, 404, No such user, No such group page.
5. AJAX used almost everywhere (From login to logout).
6. Follow, Unfollow, Recommend, Profile views, Block, Unblock.
7. Like, Comment (Sticker, Text, Image), Share, Unshare, Remove share, Tag, Untag, Remove tag, Copy post link, Delete post, Edit post, Open post.
8. Post Text, Image (with filters), Video, Audio, Link, Document, Location with emojis, Font size, Tag, mentions, hashtags and location.
9. Time ago format used everywhere.
10. Custom Video and Audio player.
11. Add tags to describe yourself much more.
12. Edit your profile (From username, Bio, social links to tags).
13. Get suggestions on whome to follow (you can also refresh suggestions).
14. Know what are some of the most popular hashtags.
15. Mutual likes and comments as in Facebook (When you see a post, if your followings have liked or commented on the post, then app re-arranges post's likers and commenters in a way that your followings get the first priority).
eg. F1, F2, F3 and 230 others liked where F = Following.
16. Shows images in Theatre mode.
17. Explore people, photos, videos, audios and groups.
18. Get notified on almost everything from your post being liked, commented, shared TO you being added to a group.
19. Create conversation with your followings and give your conversation a title.
20. Message emoji, Text, Image, Sticker.
21. Delete conversation, unsend all your messages, edit conversation title and get all info about the conversation.
22. Create group conversation with your followings.
23. Change admin (if you're an admin), leave group, remove member, change group avatar, add members and get more info about the group.
24. Bookmark the post if you liked it.
25. Make a user favourite if you like him/her.
26. Create a group with your followings.
27. Shows newest member, members you know from the group.
28. Post (Point no. 8).
29. Add/remove members.
30. Edit group's settings.
31. Shows if a user is online.
32. Love a group, invite your followings to the group.
33. Change your avatar from over 200 custom avatars, don't like it upload your avatar with a cropping tool (Same can be done while changing group avatar).
34. If a text post is large, then a glimpse of the post is shown and you can load more.
35. You will be always prompted from deleting a post to blocking someone.
36. Search users, groups and hashtags.
37. Click on a particular user tag such as 'Mumbaikar' and see all users with the same user tag.
38. Google+ style notification bar (one that transitions from the bottom, stays 3 seconds and then goes down).
39. Description provided almost everywhere eg. when you hover over Like (Heart) button, then there'll be description of 'LIKE'.
40. Change you password.
41. Change account type private or public (Default: public).
42. Change email and phone visibility.
43. Get all your login details.

# Requirements
1. Latest version of PHP.

# Own the project


1. Open PHPMyAdmin, create a Database & import `instagram.sql`. 
2. Open `config/class/needy_class.php` & fill up your PDO, Path & Gmail details.
3. Open `config/declare.php`, `config/class/needy_class.php` & `public/js/modules.js` & replace `DIR` variable containing my root path with your root path. (Note: Do not add forward slash in the end!).
4. Open `.htaccess`, go to line 17 & replace it with your root path.
5. If `Time ago` feature is not working correctly (forward or behind), then go to `config/class/time.class.php` & play around with line no `8`.
6. Enjoy!!

# Login/Signup Error

If you have followed all the steps, especially step no. 3 and using Chrome browser for initial testing and you're unable to login or signup, then try changing the Chrome browser for initial testing and it will work. Because Chrome sometimes doesn't reload the files.
4-5 issues are regarding this error only!!

# Contribute
Show your support by 🌟 the project!!

Feel free to contribute!

# Copyright claims
Many images used in the project belong to their respective creators/authors. No claim by me & those who use this project!!

**Thanks for reading**



