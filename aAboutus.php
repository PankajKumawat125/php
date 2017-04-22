<?php
 include('lock.php');
if (isset($_SESSION['sess_user_id']) == '') {
    header("Location: homepage.php");
    exit();
}
?>


<!DOCTYPE html><html>
    <head>
        <link rel="shortcut icon" href="/images/od1.ico" />
        <title>OurDrive</title>
        <style>
<?php include 'css.css'; ?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"><a href="#">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/aMHomepage.php"title="Home"><small>Home</small></a></li>
        <li><a href="/php/reset.php" title="Edit Your Profile "><small>Edit Profile</small></a></li>
        <li><a href="/php/aflogina.php"title="Your Files"><small>Your Stuff</small></a></li>
        <li><a href="/php/aoverview1.php" title="Overview"><small>Overview</small></a></li>
        <li><a href="/php/aContactUs (2).php" title="Contact Us"><small>Contact Us</small></a></li>
        <li><a href="/php/aAboutus.php" title="About Us"><small>About Us</small></a></li>
        <li><a href="/php/homepage.php"title="Logout"><small>Logout</small></a></li>
    </ul><hr>

       <center><font face="Times New Roman" size="6" color=#5F9EA0 ><B><U>OurDrive Privacy Policy</U></B></font></center><br>
    <font face="Times New Roman" size="4" color="silver"><div style="width:5%;float:left;"><font color = "#463E3F">.</font></div><div style="width:90%;float:left;">
        This Privacy Policy provides our policies and procedures for collecting, using, and disclosing your information. Users can access the OurDrive service (the Service) through our website www.OurDrive.    , applications on Devices, through APIs, and through third-parties. A Device is any computer used to access the OurDrive Service, including without limitation a desktop, laptop, mobile phone, tablet, or other consumer electronic device. This Privacy Policy governs your access of the OurDrive Service, regardless of how you access it, and by using our Services you consent to the collection, transfer, processing, storage, disclosure and other uses described in this Privacy Policy. All of the different forms of data, content, and information described below are collectively referred to as information.</div><div style="width:5%;float:left;"><font color = "#463E3F">.</font></div><br><br><br><br><br><br><br><br>
    <div style="width:5%;float:left;"><font color = "#463E3F">.</font></div>
    <div style="width:43%;float:left;">
        <font face="Times New Roman" color=#5F9EA0 size=5><b>1. The Information We Collect And Store</b></font><br>
        We may collect and store the following information when running the OurDrive Service:
        Information You Provide.   When you register an account, we collect some personal information, such as your name, phone number, credit card or other billing information, email address and home and business postal addresses. You may also ask us to import your contacts by giving us access to your third party services (for example, your email account) or to use your social networking information if you give us access to your account on social network connection services. When you invite others to join OurDrive by using our referral page, we send them a one-time email for that referral. You may also provide us with your contacts email addresses when sharing folders or files with them. We may also receive Personal Information (for example, your email address) through other users, for example if they have tried to share something with you or tried to refer OurDrive to you.<br>

        Files.   We collect and store the files you upload, download, or access with the OurDrive Service (Files). If you add a file to your OurDrive that has been previously uploaded by you or another user, we may associate all or a portion of the previous file with your account rather than storing a duplicate.<br>

        Log Data.   When you use the Service, we automatically record information from your Device, its software, and your activity using the Services. This may include the Devices Internet Protocol (IP) address, browser type, the web page visited before you came to our website, information you search for on our website, locale preferences, identification numbers associated with your Devices, your mobile carrier, date and time stamps associated with transactions, system configuration information, metadata concerning your Files, and other interactions with the Service.<br>

        Cookies.   We also use cookies to collect information and improve our Services. A cookie is a small data file that we transfer to your Device. We may use persistent cookies to save your registration ID and login password for future logins to the Service. We may use session ID cookies to enable certain features of the Service, to better understand how you interact with the Service and to monitor aggregate usage and web traffic routing on the Service. You can instruct your browser, by changing its options, to stop accepting cookies or to prompt you before accepting a cookie from the websites you visit. If you do not accept cookies, however, you may not be able to use all aspects of the Service.<br>
        <font face="Times New Roman" color=#5F9EA0 size=5><b>2. How We Use Personal Information</b></font><br>
        Personal Information.   In the course of using the Service, we may collect personal information that can be used to contact or identify you (Personal Information). Personal Information is or may be used: (i) to provide and improve our Service, (ii) to administer your use of the Service, (iii) to better understand your needs and interests, (iv) to personalize and improve your experience, and (v) to provide or offer software updates and product announcements. If you no longer wish to receive communications from us, please follow the unsubscribe instructions provided in any of those communications, or update your account settings information.<br>

        Geo-Location Information.   Some Devices allow applications to access real-time location-based information (for example, GPS). Our mobile apps do not collect such information from your mobile device at any time while you download or use our mobile apps as of the date this policy went into effect, but may do so in the future with your consent to improve our Services. Some photos and videos you place in OurDrive may contain recorded location information. We may use this information to optimize your experience. If you do not wish to share files embedded with your geo-location information with us, please do not upload them. If you dont want to store location data in your photos or videos, please consult the documentation for your camera to turn off that feature. Also, some of the information we collect from a Device, for example IP address, can sometimes be used to approximate a Devices location.<br>

        Analytics.   We also collect some information (ourselves or using third party services) using logging and cookies, such as IP address, which can sometimes be correlated with Personal Information. We use this information for the above purposes and to monitor and analyze use of the Service, for the Services technical administration, to increase our Services functionality and user-friendliness, and to verify users have the authorization needed for the Service to process their requests. As of the date this policy went into effect, we use Google Analytics. To learn more about the privacy policy of Google Analytics, click here, and to learn how to opt out of that service click here.<br>
        <font face="Times New Roman" color=#5F9EA0 size=5><b>3. Changes to our Privacy Policy</b></font><br>
        This Privacy Policy may change from time to time. If we make a change to this privacy policy that we believe materially reduces your rights, we will provide you with notice (for example, by email). And we may provide notice of changes in other circumstances as well. By continuing to use the Service after those changes become effective, you agree to be bound by the revised Privacy Policy.
    </div><div style="width:5%;float:left;"><font color = "#463E3F">.</font></div>
    <div style="width:42%;float:left;">
        <font face="Times New Roman" color=#5F9EA0 size=5><b>4. Safe Harbor :</b></font><br>
        OurDrive has received TRUSTe's Privacy Seal signifying that this privacy statement and our practices have been reviewed by TRUSTe for compliance with TRUSTe's program requirements including transparency, accountability and choice regarding the collection and use of your personal information. The TRUSTe program does not cover information that may be collected through downloadable software.<br>
        <font face="Times New Roman" color=#5F9EA0 size=5><b>5. Information Sharing and Disclosure</b></font><br>
        Your Use.   We will display your Personal Information in your profile page and elsewhere on the Service according to the preferences you set in your account. Any information you choose to provide should reflect how much you want others to know about you. Please consider carefully what information you disclose in your profile page and your desired level of anonymity. You can review and revise your profile information at any time. We do not sell your personal information to third parties. We may also share or disclose your information with your consent, for example if you use a third party application to access your account (see below). Through certain features of the Service, you may also have the ability to make some of your information public. Public information may be broadly and quickly disseminated.<br>

        Service Providers, Business Partners and Others.   We may use certain trusted third party companies and individuals to help us provide, analyze, and improve the Service (including but not limited to data storage, maintenance services, database management, web analytics, payment processing, and improvement of the Services features). These third parties may have access to your information only for purposes of performing these tasks on our behalf and under obligations similar to those in this Privacy Policy. As of the date this policy went into effect, we use Amazons S3 storage service to store some of your information (for example, your Files). You can find more information on Amazon's data security from the S3 site or, read more about how OurDrive and Amazon securely store data.<br>

        Third-Party Applications.   We may share your information with a third party application with your consent, for example when you choose to access our Services through such an application. We are not responsible for what those parties do with your information, so you should make sure you trust the application and that it has a privacy policy acceptable to you.<br>

        Compliance with Laws and Law Enforcement Requests; Protection of OurDrive's Rights.   We may disclose to parties outside OurDrive files stored in your OurDrive and information about you that we collect when we have a good faith belief that disclosure is reasonably necessary to (a) comply with a law, regulation or compulsory legal request; (b) protect the safety of any person from death or serious bodily injury; (c) prevent fraud or abuse of OurDrive or its users; or (d) to protect OurDrives property rights. If we provide your OurDrive files to a law enforcement agency as set forth above, we will remove OurDrives encryption from the files before providing them to law enforcement. However, OurDrive will not be able to decrypt any files that you encrypted prior to storing them on OurDrive.<br>

        Business Transfers.   If we are involved in a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred as part of that transaction, but we will notify you (for example, via email and/or a prominent notice on our website) of any change in control or use of your Personal Information or Files, or if either become subject to a different Privacy Policy. We will also notify you of choices you may have regarding the information.<br>
        Non-private or Non-Personal Information.   We may disclose your non-private, aggregated, or otherwise non-personal information, such as usage statistics of our Service.<br>
        <font face="Times New Roman" color=#5F9EA0 size=5><b>6. Data Retention</b></font><br>
        We will retain your information for as long as your account is active or as needed to provide you services. If you wish to cancel your account or request that we no longer use your information to provide you services, you may delete your account here. We may retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. Consistent with these requirements, we will try to delete your information quickly upon request. Please note, however, that there might be latency in deleting information from our servers and backed-up versions might exist after deletion. In addition, we do not delete from our servers files that you have in common with other users.<br>
        <font face="Times New Roman" color=#5F9EA0 size=5><b>7. Our Policy Toward Children</b></font><br>
        Our Services are not directed to persons under 13. We do not knowingly collect personally identifiable information from children under 13. If a parent or guardian becomes aware that his or her child has provided us with Personal Information without their consent. If we become aware that a child under 13 has provided us with Personal Information, we will take steps to delete such information from our files.<br></font></div>
    <div style="width:5%;float:left;"><font color = "#463E3F">.</font></div>

    </body>
</html>