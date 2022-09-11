import React from "react";
import { Link } from "@inertiajs/inertia-react";
import "@/assets/css/bootstrap.min.css";
import { Helmet } from "react-helmet";

export default function Cathead(props) {
    let HeaderTitle = props.headertitle;
    let Subheader = props.subheader ? props.subheader : HeaderTitle;
    let Subheader2 = props.subheader2 ? props.subheader2 : null;
    return (
        <section className="page-title-area ch1-pt">
            <Helmet>
                <meta charSet="utf-8" />
                {Subheader2 === null ? (
                    <title>
                        WSN Times - Latest {Subheader} News, {Subheader}{" "}
                        Breaking News, Today Headlines, Top {Subheader} News
                    </title>
                ) : (
                    <title>
                        WSN Times - Latest {Subheader} {Subheader2} News,{" "}
                        {Subheader} {Subheader2} Breaking News, Today Headlines,
                        Trending {Subheader} News, Top {Subheader2} News
                    </title>
                )}
                <meta
                    name="description"
                    content={
                        Subheader2 === null
                            ? Subheader === "India"
                                ? "India News - Find Latest India News and Breaking News today from India on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "USA"
                                ? "USA News - Find Latest USA News and Breaking News today from USA on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Australia"
                                ? "Australia News - Find Latest Australia News and Breaking News today from Australia on Politics, Business, Entertainment, Technology, Health, Fashion, Sports, Lifestyle and more at WSN Times."
                                : Subheader === "Canada"
                                ? "Canada News - Find Latest Canada News and Breaking News today from Canada on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Europe"
                                ? "Europe News - Find Latest Europe News and Breaking News today from Europe on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Africa"
                                ? "Africa News - Find Latest Africa News and Breaking News today from Africa on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "China"
                                ? "China News - Find Latest China News and Breaking News today from China on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "fashion"
                                ? "Daily fashion news in the Fashion World. Fashion shows, Ramp Walks, big fashion sale, Designer Wear, Hollywood fashion trends, Bollywood fashion trends, Model Gossips, Style Tips straight from fashion designers and a lot more at WSN Times Fashion."
                                : Subheader === "business"
                                ? "Daily Business News - Check latest business news of Indian economy, international business news, stock share market news, financial news, monetary news,  live share market news today, trending business news and a lot more at WSN Times Business."
                                : Subheader === "politics"
                                ? "World Politics News- Get the International Political News coverage, World Politics Analysis and Find out what's happening in the world of politics with the today's top politics news updates at WSN Times."
                                : Subheader === "entertainment"
                                ? "Entertainment News - Find the latest Hollywood, Bollywood today's news headlines, tv news, read new movie reviews. Get upcoming movies release date, celebrity videos, photos, television news at WSN Times."
                                : Subheader === "tech"
                                ? "Technology News - Get all the latest technology news and top breaking news and daily updates  at WSN Times. Read technology news, new mobile phone launch details, smartphone reviews, tech deals,  gadget reviews, whatsapp and apps."
                                : Subheader === "sports"
                                ? "Sports News - Read Latest Sports News Today Headlines on wsntimes.com. Find latest cricket news, tennis, football, hockey, World cup 2022, IPL 2022 Live Score Updates. Stay updated on Sports News at WSN Times."
                                : Subheader === "education"
                                ? "Education News - Read the latest education news and updates on Colleges, Universities, Schools, Board Exams, Competitive Exams, Results, Admission, and more at WSN Times."
                                : Subheader === "lifestyle"
                                ? "Lifestyle News - Get Latest Lifestyle News, Fashion Trends, Fashion Style Guide & Tips, India & World Events, Celebrity Style & Outfits, Beauty and Health Tips, Relationships Advice, Travel Guide and more at WSN Times."
                                : Subheader === "health"
                                ? "Get the latest WSN Times Health News: breaking health and medical news from the UK and around the world and wsntimes.com is the destination for medical and health news and information."
                                : Subheader === "automobile"
                                ? "Automobile News - Find the latest automobile Auto Insight, News & Articles from all top sources for the World Auto industry on Automobile at WSN Times."
                                : Subheader === "app"
                                ? "WSN Times brings latest news from World on breaking news, today news headlines, politics, business, technology, bollywood, entertainment, sports and others. Find exclusive news stories on World politics, current affairs, cricket matches, festivals and events."
                                : Subheader === "food"
                                ? "Latest Food News- Read Articles related to nutritious foods, tips on healthy lifestyle, diet plans, weight loss, weight gain, skin glow, beauty care tips, home remedies, diabetes, benefits of aloe vera and more at WSN Times"
                                : Subheader === "game"
                                ? "Games News - Get all latest news on games, tech gaming news, latest games updates at WSN Times. Stay connected to know more about latest gadgets news, gaming news, computer games news, latest tech game news, video game news, Pc gaming news"
                                : Subheader === "internet"
                                ? "internet Latest Breaking News - Pictures, Videos, and Special Reports from The WSN Times. internet  Blogs, Comments and Archive News on wsntimes.com"
                                : Subheader === "phones"
                                ? "Get the latest Mobile News on all Samsung mobiles, iPhone, Sony, Nokia, Xiaomi & Micromax smartphones. Also see the technical updates for all Android, Windows and BlackBerry phones at WSN Times."
                                : Subheader === "development"
                                ? "Development News - Latest Global development news, investigations and analysis at WSN Times."
                                : Subheader === "gadgets"
                                ? "Latest Gadgets News and Daily updates on Gadgets News. Get trending technology news, Smartphones, Games and other tech related updates at WSN Times."
                                : "Latest News - WSNTimes Get the latest news of " +
                                  Subheader +
                                  " Read latest and breaking news of " +
                                  Subheader +
                                  ". Today's top " +
                                  Subheader +
                                  " news headlines, news on " +
                                  Subheader +
                                  ", politics, elections, government, business, technology, and Bollywood and much more"
                            : Subheader2 === "Entertainment"
                            ? "Get the latest Entertainment, celebrity news and hot celeb gossip with exclusive stories and pictures from " +
                              Subheader +
                              " at WSN Times."
                            : Subheader2 === "Politics"
                            ? "Latest " +
                              Subheader +
                              " politics news, comment and analysis from the WSN Times, with the today's top politics news updates"
                            : Subheader2 === "Sports"
                            ? "Latest " +
                              Subheader +
                              " Sports news, comment and analysis from the wsntimes.com , Find latest cricket news, tennis, football, hockey, World cup 2022, IPL 2022 Live Score Updates. Stay updated on " +
                              Subheader +
                              " Sports News at WSN Times."
                            : Subheader2 === "Tech"
                            ? "Latest " +
                              Subheader +
                              " Tech news, comment and analysis from the WSN Times, Read technology news, new mobile phone launch details, smartphone reviews, tech deals,  gadget reviews, whatsapp and apps at wsntimes.com."
                            : Subheader +
                              " " +
                              Subheader2 +
                              " News - WSNTimes Get the latest news of " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " Read latest and breaking news of " +
                              Subheader2 +
                              ". Today's top " +
                              Subheader2 +
                              " news headlines, news on " +
                              Subheader2 +
                              ", politics, elections, government, business, technology, and Bollywood and much more"
                    }
                />
                <meta
                    name="news_keywords"
                    content={
                        Subheader === "India"
                            ? " india news, today, politics news, today's sports news headlines, tech news app, kellton tech news, hindi tech news, hcl tech news, politics news today, up politics news,india sports t shirt, india sports movies, india sports minister, india live score, rajasthan india, gujarat india, india england, business news today in hindi,government hospital near me,what is today in india, india vs england test, covid 19 india org, india news, india news today, india news hindi, india news in hindi, air india news, india news live, google india news, first india news rajasthan twitter, latest india news, coal india news, times of india news, ford india news, sahara india news, first india news rajasthan, china india news, team india news, today india news in hindi, olympic india news, india news headlines, tamil one india news, first india news rajasthan live, barc ratings india news channels, one india news tamil, times of india news today, india news latest, india news today in hindi, india news channel, covid 19 coronavirus cases india news, omicron india news, amway india news, india news live today, msn india news, wsn india news, affle india news, today, today, today, today,UP Election News, Uttar Pradesh Election news, Uttar Pradesh assembly Election News, UP assembly Election News, Uttar Pradesh assembly Election latest News,"
                            : "Latest News, News, news update, latest online news, politics news, entertainment news, sports news, cricket news, business news, technology news and much more"
                    }
                />
                <meta
                    name="keywords"
                    content={
                        Subheader2 === null
                            ? Subheader === "India"
                                ? " india news, india news today, india news hindi, india news in hindi, tech news app, kellton tech news, hindi tech news, hcl tech news, politics news today, up politics news, punjab politics news,politics news,air india news, india news live, google india news, first india news rajasthan twitter, latest india news, coal india news, times of india news, ford india news, sahara india news, first india news rajasthan, china india news, team india news, today india news in hindi, olympic india news, india news headlines, tamil one india news, first india news rajasthan live, barc ratings india news channels, one india news tamil, times of india news today, india news latest, india news today in hindi, india news channel, covid 19 coronavirus cases india news, omicron india news, amway india news, india news live today, msn india news, wsn india news, affle india news, today, today, today, today,UP Election News, Uttar Pradesh Election news, Uttar Pradesh assembly Election News, UP assembly Election News, Uttar Pradesh assembly Election latest News,"
                                : Subheader +
                                  " news, latest news" +
                                  Subheader +
                                  "," +
                                  Subheader +
                                  " News, Today's " +
                                  Subheader +
                                  " news, latest " +
                                  Subheader +
                                  " news, breaking " +
                                  Subheader +
                                  " news, live " +
                                  Subheader +
                                  " news, current " +
                                  Subheader +
                                  " news, news in " +
                                  Subheader +
                                  ", local " +
                                  Subheader +
                                  " news " +
                                  Subheader +
                                  " news today, top " +
                                  Subheader +
                                  " news, top news in " +
                                  Subheader +
                                  ", breaking news " +
                                  Subheader +
                                  ", " +
                                  Subheader +
                                  " news today, news today " +
                                  Subheader +
                                  ", current news in " +
                                  Subheader +
                                  ", " +
                                  Subheader +
                                  " news online, latest news " +
                                  Subheader +
                                  " today, news update " +
                                  Subheader +
                                  ", news headlines " +
                                  Subheader +
                                  ", breaking news " +
                                  Subheader
                            : Subheader +
                              " " +
                              Subheader2 +
                              " news," +
                              Subheader +
                              " news, latest news" +
                              Subheader +
                              " " +
                              Subheader2 +
                              "," +
                              Subheader +
                              " " +
                              Subheader2 +
                              " News, Today's " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, latest " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, local " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, top " +
                              Subheader +
                              "  " +
                              Subheader2 +
                              " news, breaking " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, live " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, current " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news, news in " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news today, top news in " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", breaking news " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news today, news today " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", current news in " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " news online, latest news " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " today, news update " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", news headlines " +
                              Subheader +
                              " " +
                              Subheader2 +
                              ", breaking news " +
                              Subheader +
                              " " +
                              Subheader2
                    }
                />
                <meta
                    property="og:title"
                    content={
                        Subheader2 === null
                            ? " WSN Times - Latest" +
                              Subheader +
                              " News," +
                              Subheader +
                              " Breaking News, Today Headlines, Top " +
                              Subheader +
                              " News"
                            : " WSN Times - Latest " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " News, " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " Breaking News, Today Headlines, Trending " +
                              Subheader +
                              " News, Top " +
                              Subheader2 +
                              " News"
                    }
                />
                <meta
                    property="og:description"
                    content={
                        Subheader2 === null
                            ? Subheader === "India"
                                ? "India News - Find Latest India News and Breaking News today from India on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "USA"
                                ? "USA News - Find Latest USA News and Breaking News today from USA on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Australia"
                                ? "Australia News - Find Latest Australia News and Breaking News today from Australia on Politics, Business, Entertainment, Technology, Health, Fashion, Sports, Lifestyle and more at WSN Times."
                                : Subheader === "Canada"
                                ? "Canada News - Find Latest Canada News and Breaking News today from Canada on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Europe"
                                ? "Europe News - Find Latest Europe News and Breaking News today from Europe on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "Africa"
                                ? "Africa News - Find Latest Africa News and Breaking News today from Africa on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "China"
                                ? "China News - Find Latest China News and Breaking News today from China on Politics, Business, Entertainment, Technology, Sports, Health, Fashion, Lifestyle and more at WSN Times."
                                : Subheader === "fashion"
                                ? "Daily fashion news in the Fashion World. Fashion shows, Ramp Walks, big fashion sale, Designer Wear, Hollywood fashion trends, Bollywood fashion trends, Model Gossips, Style Tips straight from fashion designers and a lot more at WSN Times Fashion."
                                : Subheader === "business"
                                ? "Daily Business News - Check latest business news of Indian economy, international business news, stock share market news, financial news, monetary news,  live share market news today, trending business news and a lot more at WSN Times Business."
                                : Subheader === "politics"
                                ? "World Politics News- Get the International Political News coverage, World Politics Analysis and Find out what's happening in the world of politics with the today's top politics news updates at WSN Times."
                                : Subheader === "entertainment"
                                ? "Entertainment News - Find the latest Hollywood, Bollywood today's news headlines, tv news, read new movie reviews. Get upcoming movies release date, celebrity videos, photos, television news at WSN Times."
                                : Subheader === "tech"
                                ? "Technology News - Get all the latest technology news and top breaking news and daily updates  at WSN Times. Read technology news, new mobile phone launch details, smartphone reviews, tech deals,  gadget reviews, whatsapp and apps."
                                : Subheader === "sports"
                                ? "Sports News - Read Latest Sports News Today Headlines on wsntimes.com. Find latest cricket news, tennis, football, hockey, World cup 2022, IPL 2022 Live Score Updates. Stay updated on Sports News at WSN Times."
                                : Subheader === "education"
                                ? "Education News - Read the latest education news and updates on Colleges, Universities, Schools, Board Exams, Competitive Exams, Results, Admission, and more at WSN Times."
                                : Subheader === "lifestyle"
                                ? "Lifestyle News - Get Latest Lifestyle News, Fashion Trends, Fashion Style Guide & Tips, India & World Events, Celebrity Style & Outfits, Beauty and Health Tips, Relationships Advice, Travel Guide and more at WSN Times."
                                : Subheader === "health"
                                ? "Get the latest WSN Times Health News: breaking health and medical news from the UK and around the world and wsntimes.com is the destination for medical and health news and information."
                                : Subheader === "automobile"
                                ? "Automobile News - Find the latest automobile Auto Insight, News & Articles from all top sources for the World Auto industry on Automobile at WSN Times."
                                : Subheader === "app"
                                ? "WSN Times brings latest news from World on breaking news, today news headlines, politics, business, technology, bollywood, entertainment, sports and others. Find exclusive news stories on World politics, current affairs, cricket matches, festivals and events."
                                : Subheader === "food"
                                ? "Latest Food News- Read Articles related to nutritious foods, tips on healthy lifestyle, diet plans, weight loss, weight gain, skin glow, beauty care tips, home remedies, diabetes, benefits of aloe vera and more at WSN Times"
                                : Subheader === "game"
                                ? "Games News - Get all latest news on games, tech gaming news, latest games updates at WSN Times. Stay connected to know more about latest gadgets news, gaming news, computer games news, latest tech game news, video game news, Pc gaming news"
                                : Subheader === "internet"
                                ? "internet Latest Breaking News - Pictures, Videos, and Special Reports from The WSN Times. internet  Blogs, Comments and Archive News on wsntimes.com"
                                : Subheader === "phones"
                                ? "Get the latest Mobile News on all Samsung mobiles, iPhone, Sony, Nokia, Xiaomi & Micromax smartphones. Also see the technical updates for all Android, Windows and BlackBerry phones at WSN Times."
                                : Subheader === "development"
                                ? "Development News - Latest Global development news, investigations and analysis at WSN Times."
                                : Subheader === "gadgets"
                                ? "Latest Gadgets News and Daily updates on Gadgets News. Get trending technology news, Smartphones, Games and other tech related updates at WSN Times."
                                : "Latest News - WSNTimes Get the latest news of " +
                                  Subheader +
                                  " Read latest and breaking news of " +
                                  Subheader +
                                  ". Today's top " +
                                  Subheader +
                                  " news headlines, news on " +
                                  Subheader +
                                  ", politics, elections, government, business, technology, and Bollywood and much more"
                            : Subheader2 === "Entertainment"
                            ? "Get the latest Entertainment, celebrity news and hot celeb gossip with exclusive stories and pictures from " +
                              Subheader +
                              " at WSN Times."
                            : Subheader2 === "Politics"
                            ? "Latest " +
                              Subheader +
                              " politics news, comment and analysis from the WSN Times, with the today's top politics news updates"
                            : Subheader2 === "Sports"
                            ? "Latest " +
                              Subheader +
                              " Sports news, comment and analysis from the wsntimes.com , Find latest cricket news, tennis, football, hockey, World cup 2022, IPL 2022 Live Score Updates. Stay updated on " +
                              Subheader +
                              " Sports News at WSN Times."
                            : Subheader2 === "Tech"
                            ? "Latest " +
                              Subheader +
                              " Tech news, comment and analysis from the WSN Times, Read technology news, new mobile phone launch details, smartphone reviews, tech deals,  gadget reviews, whatsapp and apps at wsntimes.com."
                            : Subheader +
                              " " +
                              Subheader2 +
                              " News - WSNTimes Get the latest news of " +
                              Subheader +
                              " " +
                              Subheader2 +
                              " Read latest and breaking news of " +
                              Subheader2 +
                              ". Today's top " +
                              Subheader2 +
                              " news headlines, news on " +
                              Subheader2 +
                              ", politics, elections, government, business, technology, and Bollywood and much more"
                    }
                />
                <meta property="og:type" content="website" />
                {Subheader2 === null ? (
                    <meta
                        property="og:url"
                        href={"https://wsntimes.com/" + Subheader}
                    />
                ) : (
                    <meta
                        property="og:url"
                        href={
                            "https://wsntimes.com/" +
                            Subheader +
                            "/" +
                            Subheader2
                        }
                    />
                )}
                {Subheader2 === null ? (
                    <link
                        rel="canonical"
                        href={"https://wsntimes.com/" + Subheader}
                    />
                ) : (
                    <link
                        rel="canonical"
                        href={
                            "https://wsntimes.com/" +
                            Subheader +
                            "/" +
                            Subheader2
                        }
                    />
                )}
            </Helmet>
            <div className="container">
                <div className="row">
                    <div className="col-lg-12">
                        <div className="breadcrumb-inner">
                            <h5 className="page-title text-capitalize">
                                {HeaderTitle === "About"
                                    ? "About Us"
                                    : HeaderTitle === "Contact"
                                    ? "Contact Us"
                                    : HeaderTitle === "Privacy-Policy"
                                    ? "Privacy Policy"
                                    : HeaderTitle}
                            </h5>
                            <ul className="page-list">
                                <li>
                                    <Link href={"/"}>Home</Link>
                                </li>
                                <li>
                                    <Link
                                        href={route(Subheader)}
                                        className="text-capitalize"
                                    >
                                        {Subheader}
                                    </Link>
                                </li>
                                <li>
                                    <h1 className="font-weight-light fs-6">
                                        {" "}
                                        {Subheader2}{" "}
                                    </h1>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
