import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;


public class we {

    public static void main(String[] args) {
        int currentMax = 0;
        String titleForCurrentMax = "";
        String priceForCurrentMax = "";
        try {
            DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
            DocumentBuilder builder = factory.newDocumentBuilder();
            Document doc = builder.parse("/Users/anjumeejeba/IdeaProjects/xml/order.xml");
            
            NodeList list = doc.getElementsByTagName("order");
            for (int i = 0; i < list.getLength(); i++) {
                Node n = list.item(i);
                if(n.getNodeType()==Node.ELEMENT_NODE){
                    Element order = (Element) n;
                    
                    NodeList books = order.getElementsByTagName("book");
                    for(int b=0; b<books.getLength(); b++){
                        Node bn = books.item(b);
                        if(bn.getNodeType()==Node.ELEMENT_NODE){
                            Element book = (Element) bn;
                            int tmp = Integer.parseInt(order.getElementsByTagName("count").item(0).getTextContent());
                            
                            if(tmp>currentMax) {
                                currentMax = tmp;
                                titleForCurrentMax = book.getElementsByTagName("title").item(0).getTextContent();
                                priceForCurrentMax = order.getElementsByTagName("price").item(0).getTextContent();
                            }
                            System.out.println("Title of the book: " + book.getElementsByTagName("title").item(0).getTextContent());
                            System.out.println("Number of Copies: " + order.getElementsByTagName("count").item(0).getTextContent()+"\n");
                        }
                    }
                }
            }
            int totOrder = list.getLength();
            float maxPrice=  Float.parseFloat(priceForCurrentMax);
            System.out.println("Information of the maximum ordered book"+"\n");
            System.out.println("Maximum book copies :" + currentMax);
            System.out.println("Maximum Ordered Book Title :" + titleForCurrentMax);
            System.out.println("Maximum Ordered Book Price:" + maxPrice+"\n");
            
        } catch (Exception e) {
            e.printStackTrace();
        }

    }
}
   
        

