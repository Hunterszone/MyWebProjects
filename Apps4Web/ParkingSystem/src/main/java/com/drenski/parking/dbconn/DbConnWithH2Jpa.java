package com.drenski.parking.dbconn;

import java.util.Map;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

import com.drenski.parking.utils.HelperStructures;

public class DbConnWithH2Jpa {

	private static Map<String, String> endpointAndOutput = HelperStructures.endpointsAndOutputs;

	public static void init() {

		Responses responses = new Responses();

		responses.setRespId(1);
		responses.setEndpoint(endpointAndOutput.keySet().iterator().next());
		responses.setOutput(endpointAndOutput.get(endpointAndOutput.keySet().iterator().next()));

		Configuration cfg = new Configuration().configure().addAnnotatedClass(Responses.class);

		ServiceRegistry srvReg = new StandardServiceRegistryBuilder().applySettings(cfg.getProperties()).build();

		SessionFactory sf = cfg.buildSessionFactory(srvReg);

		Session session = sf.openSession();

		Transaction trx = session.beginTransaction();

		session.saveOrUpdate(responses);

		endpointAndOutput.clear();
		HelperStructures.endpoints.clear();
		HelperStructures.outputs.clear();
		
		session.flush();
        session.clear();
		
		trx.commit();
		
		System.out.println("Goodbye!");
		session.close();;

	}
}
